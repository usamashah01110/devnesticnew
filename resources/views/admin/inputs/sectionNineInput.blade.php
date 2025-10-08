@extends('admin.main')
@section('title', 'Section Nine')
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
        <div class="container">
            <h1 class="text-center">{{ $title }}</h1>
            <hr/>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="developer_id" class="form-label">Developer ID</label>
                    <input type="text" name="developer_id" id="developer_id" class="form-control"
                           value="{{ old('developer_id') }}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Developer Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="mb-2">
                    <label for="role" class="form-label">Role of Team Member</label>
                    <input type="text" id="role" name="role" class="form-control" value="{{ old('role') }}">
                </div>

                <div class="mb-2">
                    <label for="description" class="form-label">Description of Team Member</label>
                    <input type="text" id="description" name="description" class="form-control"
                           value="{{ old('description') }}">
                </div>

                <div class="mb-2">
                    <label for="tech1">Developer Experties in tech 1</label>
                    <input type="text" id="tech1" name="tech1" class="form-control" value="{{ old('tech1') }}">
                </div>

                <div class="mb-2">
                    <label for="tech2">Developer Experties in tech 2</label>
                    <input type="text" id="tech2" name="tech2" class="form-control" value="{{ old('tech2') }}">
                </div>

                <div class="mb-2">
                    <label for="tech3">Developer Experties in tech 3</label>
                    <input type="text" id="tech3" name="tech3" class="form-control" value="{{ old('tech3') }}">
                </div>

                <div class="mb-2">
                    <label for="tech4">Developer Experties in tech 4</label>
                    <input type="text" id="tech4" name="tech4" class="form-control" value="{{ old('tech4') }}">
                </div>

                <!-- Image Upload with Preview -->
                <div class="mb-2">
                    <label class="form-label">Image of Developer</label>
                    <input type="file" class="hidden-input" name="image" id="image" accept="image/*">
                    <div id="preview_image" class="image-preview">
                        <div class="upload-placeholder">
                            <i class="fas fa-image fa-3x mb-3"></i>
                            <p>Click to upload image</p>
                            <small>Choose an image file (Max 5MB)</small>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
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
                    <small>Choose an image file (Max 5MB)</small>
                </div>
            `;
            }
        }

        setupImagePreview('image', 'preview_image');
    </script>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
