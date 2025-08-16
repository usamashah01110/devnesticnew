@extends('admin.dashboard')
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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
        .image-container {
            position: relative;
        }
    </style>

    <div class="container">
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
            <form action="{{ route('section.two.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">short about us</label>
                    <input type="text" class="form-control" name="short_about_us" value="{{ old('short_about_us') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Heading One</label>
                    <input type="text" class="form-control" name="heading_one" value="{{ old('heading_one') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Paragraph</label>
                    <textarea class="form-control" name="paragraph" rows="3">{{ old('paragraph') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Experiance</label>
                    <input type="text" class="form-control" name="experiance" value="{{ old('btn_one_text') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">CEO & Founder</label>
                    <input type="text" class="form-control" name="ceo_founder_name" value="{{ old('years') }}">
                </div>

                <!-- CEO & Founder Profile Picture -->
                <div class="mb-3">
                    <label class="form-label">CEO & Founder Profile Picture</label>
                    <input type="file" class="hidden-input" name="ceo_founder_img" id="ceo_founder_img" accept="image/*">
                    <div id="preview_ceo_founder_img" class="image-preview">
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    </div>
                </div>

                <!-- Large Image -->
                <div class="mb-3">
                    <label class="form-label">Large image</label>
                    <input type="file" class="hidden-input" name="large_img" id="large_img" accept="image/*">
                    <div id="preview_large_img" class="image-preview">
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    </div>
                </div>

                <!-- Small Image -->
                <div class="mb-3">
                    <label class="form-label">Small Image</label>
                    <input type="file" class="hidden-input" name="small_img" id="small_img" accept="image/*">
                    <div id="preview_small_img" class="image-preview">
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
    <br>

    <script>
        function setupImagePreview(fileInputId, previewContainerId) {
            const imageInput = document.getElementById(fileInputId);
            const previewContainer = document.getElementById(previewContainerId);

            previewContainer.addEventListener('click', function(e) {
                if (e.target === previewContainer || e.target.classList.contains('upload-placeholder') || 
                    e.target.classList.contains('fa-image') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                    imageInput.click();
                }
            });

            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select a valid image file.');
                        resetPreview();
                        return;
                    }
                    const maxSize = 5 * 1024 * 1024;
                    if (file.size > maxSize) {
                        alert('File size must be less than 5MB.');
                        resetPreview();
                        return;
                    }
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewContainer.innerHTML = `
                            <div class="image-container">
                                <img class="preview-image" src="${e.target.result}" alt="Preview Image">
                                <div>
                                    <button type="button" class="btn btn-sm btn-danger remove-btn">Remove Image</button>
                                </div>
                            </div>
                        `;
                        previewContainer.querySelector('.remove-btn').addEventListener('click', function(e) {
                            e.stopPropagation();
                            resetPreview();
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            function resetPreview() {
                imageInput.value = '';
                previewContainer.innerHTML = `
                    <div class="upload-placeholder">
                        <i class="fas fa-image fa-3x mb-3"></i>
                        <p>Click to upload image</p>
                        <small>Choose an image file</small>
                    </div>
                `;
            }
        }

        // Apply preview setup for each image input
        setupImagePreview('ceo_founder_img', 'preview_ceo_founder_img');
        setupImagePreview('large_img', 'preview_large_img');
        setupImagePreview('small_img', 'preview_small_img');
    </script>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
