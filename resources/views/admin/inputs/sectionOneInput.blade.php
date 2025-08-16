@extends('admin.dashboard')
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
        <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Heading One</label>
                <input type="text" class="form-control" name="heading_one" value="{{ old('heading_one') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Paragraph</label>
                <textarea class="form-control" name="paragraph" rows="3">{{ old('paragraph') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Button Text</label>
                <input type="text" class="form-control" name="btn_one_text" value="{{ old('btn_one_text') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Years</label>
                <input type="text" class="form-control" name="years" value="{{ old('years') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Clients</label>
                <input type="text" class="form-control" name="clients" value="{{ old('clients') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Success Rate</label>
                <input type="text" class="form-control" name="success_rate" value="{{ old('success_rate') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <!-- Hidden file input -->
                <input type="file" class="hidden-input" name="image_path" id="imageInput" accept="image/*">
                
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

            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('imageInput');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');

        // Make preview container clickable
        imagePreviewContainer.addEventListener('click', function(e) {
            if (e.target === imagePreviewContainer || e.target.classList.contains('upload-placeholder') || 
                e.target.classList.contains('fa-image') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                imageInput.click();
            }
        });

        // Handle file selection
        imageInput.addEventListener('change', function(e) {
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
                reader.onload = function(e) {
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
                    document.getElementById('removeImage').addEventListener('click', function(e) {
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
