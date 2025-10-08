@extends('admin.main')
@section('content')
    <style>
        .image-preview {
            max-width: 300px;
            max-height: 300px;
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-top: 15px;
            background-color: #f8f9fa;
            cursor: pointer;
            position: relative;
        }

        .preview-image {
            max-width: 100%;
            max-height: 250px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .remove-btn {
            margin-top: 10px;
        }

        .upload-placeholder {
            color: #6c757d;
            font-style: italic;
        }

        .hidden-input {
            display: none;
        }
    </style>

    <div class="container">
        <h2 class="text-center">{{ $title }}</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>

        <form action="{{ route('section.update', ['section'=>'about', 'id'=> $record->id]) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <!-- Text fields -->
            <div class="mb-3">
                <label class="form-label">Short About Us</label>
                <input type="text" class="form-control" name="short_about_us" value="{{ $record->short_about_us }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Heading One</label>
                <input type="text" class="form-control" name="heading_one" value="{{ $record->heading_one }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Paragraph</label>
                <textarea class="form-control" name="paragraph" rows="3">{{ $record->paragraph }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Experience</label>
                <input type="text" class="form-control" name="experiance" value="{{ $record->experiance }}">
            </div>

            <div class="mb-3">
                <label class="form-label">CEO & Founder Name</label>
                <input type="text" class="form-control" name="ceo_founder_name"
                       value="{{ $record->ceo_founder_name }}">
            </div>

            <!-- CEO Founder Image -->
            <div class="mb-3">
                <label class="form-label">CEO & Founder Profile Picture</label>
                <input type="file" class="hidden-input" name="ceo_founder_img" id="ceoImageInput" accept="image/*">
                <div id="ceoImagePreview" class="image-preview">
                    @if($record->ceo_founder_img)
                        <div>
                            <img class="preview-image" src="{{ asset('storage/'.$record->ceo_founder_img) }}">
                            <button type="button" class="btn btn-sm btn-danger remove-btn">Remove Image</button>
                        </div>
                    @else
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Large Image -->
            <div class="mb-3">
                <label class="form-label">Large Image</label>
                <input type="file" class="hidden-input" name="large_img" id="largeImageInput" accept="image/*">
                <div id="largeImagePreview" class="image-preview">
                    @if($record->large_img)
                        <div>
                            <img class="preview-image" src="{{ asset('storage/'.$record->large_img) }}">
                            <button type="button" class="btn btn-sm btn-danger remove-btn">Remove Image</button>
                        </div>
                    @else
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Small Image -->
            <div class="mb-3">
                <label class="form-label">Small Image</label>
                <input type="file" class="hidden-input" name="small_img" id="smallImageInput" accept="image/*">
                <div id="smallImagePreview" class="image-preview">
                    @if($record->small_img)
                        <div>
                            <img class="preview-image" src="{{ asset('storage/'.$record->small_img) }}">
                            <button type="button" class="btn btn-sm btn-danger remove-btn">Remove Image</button>
                        </div>
                    @else
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Contact -->
            <div class="mb-3">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact" value="{{ $record->contact }}">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>

    <script>
        function setupImagePreview(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);

            preview.addEventListener('click', function (e) {
                if (e.target === preview || e.target.classList.contains('upload-placeholder') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                    input.click();
                }
            });

            input.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select a valid image.');
                        return;
                    }
                    if (file.size > 5 * 1024 * 1024) {
                        alert('File size must be less than 5MB.');
                        return;
                    }
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        preview.innerHTML = `
                    <div>
                        <img class="preview-image" src="${e.target.result}">
                        <button type="button" class="btn btn-sm btn-danger remove-btn">Remove Image</button>
                    </div>
                `;
                        preview.querySelector('.remove-btn').addEventListener('click', function (ev) {
                            ev.stopPropagation();
                            input.value = '';
                            preview.innerHTML = `
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    `;
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            const removeBtn = preview.querySelector('.remove-btn');
            if (removeBtn) {
                removeBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    input.value = '';
                    preview.innerHTML = `
                <div class="upload-placeholder">
                    <i class="fas fa-image fa-3x mb-3"></i>
                    <p>Click to upload image</p>
                    <small>Choose an image file</small>
                </div>
            `;
                });
            }
        }

        setupImagePreview('ceoImageInput', 'ceoImagePreview');
        setupImagePreview('largeImageInput', 'largeImagePreview');
        setupImagePreview('smallImageInput', 'smallImagePreview');
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
