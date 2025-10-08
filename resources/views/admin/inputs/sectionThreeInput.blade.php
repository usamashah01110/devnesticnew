@extends('admin.main')
@section('title', 'Section one')
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

        .image-container {
            position: relative;
        }
    </style>

    <div class="container">
        <div class="container">
            <h1 class="text-center">{{$title}}</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <hr/>
            <form action="{{ route('section.three.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Logo -->
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="file" class="hidden-input" name="logo" id="logo" accept="image/*">
                    <div id="preview_logo" class="image-preview">
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file</small>
                        </div>
                    </div>
                </div>

                <!-- Service card title -->
                <div class="mb-3">
                    <label class="form-label" for="title">Service title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <!-- Service Description -->
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                           value="{{ old('description') }}">
                </div>

                <!-- Link -->
                <div class="mb-3">
                    <label class="form-label" for="link">Service Link</label>
                    <input type="text" id="link" class="form-control" name="link" value="{{ old('link') }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>

    <script>
        function setupImagePreview(fileInputId, previewContainerId) {
            const imageInput = document.getElementById(fileInputId);
            const previewContainer = document.getElementById(previewContainerId);

            previewContainer.addEventListener('click', function (e) {
                if (e.target === previewContainer || e.target.classList.contains('upload-placeholder') ||
                    e.target.classList.contains('fa-image') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                    imageInput.click();
                }
            });

            imageInput.addEventListener('change', function (e) {
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
                    reader.onload = function (e) {
                        previewContainer.innerHTML = `
                        <div class="image-container">
                            <img class="preview-image" src="${e.target.result}" alt="Preview Image">
                            <div>
                                <button type="button" class="btn btn-sm btn-danger remove-btn">Remove Image</button>
                            </div>
                        </div>
                    `;
                        previewContainer.querySelector('.remove-btn').addEventListener('click', function (e) {
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

        setupImagePreview('logo', 'preview_logo');
    </script>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
