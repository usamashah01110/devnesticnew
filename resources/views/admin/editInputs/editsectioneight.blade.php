@extends('admin.main')
@section('title', 'Section Eight')
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
            <form action="{{ route('section.eight.update', $sectionEight->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="developer_id" class="form-label">Developer ID</label>
                    <input type="text" name="developer_id" id="developer_id" class="form-control"
                           value="{{ $sectionEight->developer_id }}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Developer Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $sectionEight->name }}">
                </div>

                <div class="mb-2">
                    <label for="role" class="form-label">Role of Team Member</label>
                    <input type="text" id="role" name="role" class="form-control" value="{{ $sectionEight->role }}">
                </div>

                <div class="mb-2">
                    <label for="description" class="form-label">Description of Team Member</label>
                    <input type="text" id="description" name="description" class="form-control"
                           value="{{ $sectionEight->description }}">
                </div>

                <div class="mb-2">
                    <label for="tech1">Developer Experties in tech 1</label>
                    <input type="text" id="tech1" name="tech1" class="form-control" value="{{ $sectionEight->tech1 }}">
                </div>

                <div class="mb-2">
                    <label for="tech2">Developer Experties in tech 2</label>
                    <input type="text" id="tech2" name="tech2" class="form-control" value="{{ $sectionEight->tech2 }}">
                </div>

                <div class="mb-2">
                    <label for="tech3">Developer Experties in tech 3</label>
                    <input type="text" id="tech3" name="tech3" class="form-control" value="{{ $sectionEight->tech3 }}">
                </div>

                <div class="mb-2">
                    <label for="tech4">Developer Experties in tech 4</label>
                    <input type="text" id="tech4" name="tech4" class="form-control" value="{{ $sectionEight->tech4 }}">
                </div>

                <!-- Image Upload with Preview -->
                <div class="mb-3">
                    <label class="form-label">Developer Image</label>
                    <!-- Hidden file input -->
                    <input type="file" class="hidden-input" name="image" id="imageInput" accept="image/*">

                    <!-- Image Preview Container -->
                    <div id="imagePreviewContainer" class="image-preview">
                        <div id="placeholderContainer">
                            <div class="upload-placeholder">
                                <i class="fas fa-image fa-3x mb-3"></i>
                                <p>Click to upload image</p>
                                <small>Choose an image file</small>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('imageInput');
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');

            // Make preview container clickable
            imagePreviewContainer.addEventListener('click', function (e) {
                if (e.target === imagePreviewContainer || e.target.classList.contains('upload-placeholder') ||
                    e.target.classList.contains('fa-image') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                    imageInput.click();
                }
            });

            // Handle file selection
            imageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];

                if (file) {
                    // Validate file type
                    if (!file.type.startsWith('image/')) {
                        alert('Please select a valid image file.');
                        resetPreview();
                        return;
                    }

                    // Validate file size (5MB max)
                    const maxSize = 5 * 1024 * 1024;
                    if (file.size > maxSize) {
                        alert('File size must be less than 5MB.');
                        resetPreview();
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreviewContainer.innerHTML = `
                        <div class="image-container">
                            <img id="previewImage" class="preview-image" src="${e.target.result}" alt="Preview Image">
                            <div>
                                <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeImage">
                                    Remove Image
                                </button>
                            </div>
                        </div>
                    `;
                        document.getElementById('removeImage').addEventListener('click', function (e) {
                            e.stopPropagation();
                            resetPreview();
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            function resetPreview() {
                imageInput.value = '';
                imagePreviewContainer.innerHTML = `
                <div id="placeholderContainer">
                    <div class="upload-placeholder">
                        <i class="fas fa-image fa-3x mb-3"></i>
                        <p>Click to upload image</p>
                        <small>Choose an image file</small>
                    </div>
                </div>
            `;
            }
        });
    </script>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
