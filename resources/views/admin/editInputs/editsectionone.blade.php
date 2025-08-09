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
    </style>
    <div class="container">
        <div class="container">
            <form action="{{ route('section.one.update', $sectionOne->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Heading One</label>
                    <input type="text" class="form-control" name="heading_one" value="{{ $sectionOne->heading_one }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Paragraph</label>
                    <textarea class="form-control" name="paragraph" rows="3">{{ $sectionOne->paragraph }} </textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Button Text</label>
                    <input type="text" class="form-control" name="btn_one_text" value="{{ $sectionOne->btn_one_text }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Years</label>
                    <input type="text" class="form-control" name="years" value="{{ $sectionOne->years }} ">
                </div>

                <div class="mb-3">
                    <label class="form-label">Clients</label>
                    <input type="text" class="form-control" name="clients" value="{{ $sectionOne->clients }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Success Rate</label>
                    <input type="text" class="form-control" name="success_rate" value="{{ $sectionOne->success_rate }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image_path" id="imageInput" accept="image/*">
                </div>

                <!-- Image Preview Container -->
                <div id="imagePreviewContainer" class="image-preview" style="display: none;">
                    <img id="previewImage" class="preview-image" src="{{ asset('storage/'.$sectionOne->image_path) }}" alt="Preview">
                    <div>
                        <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeImage">
                            Remove Image
                        </button>
                    </div>
                </div>

                <!-- Placeholder when no image -->
                <div id="placeholderContainer" class="image-preview">
                    <div class="upload-placeholder">
                        <i class="fas fa-image fa-3x mb-3"></i>
                        <p>No image selected</p>
                        <small>Choose an image file to preview</small>
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
            const previewImage = document.getElementById('previewImage');
            const removeImageBtn = document.getElementById('removeImage');
            const placeholderContainer = document.getElementById('placeholderContainer');

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

                    // Validate file size (optional - 5MB limit)
                    const maxSize = 5 * 1024 * 1024; // 5MB in bytes
                    if (file.size > maxSize) {
                        alert('File size must be less than 5MB.');
                        resetPreview();
                        return;
                    }

                    // Create FileReader to read the file
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Set the image source to the file data
                        previewImage.src = e.target.result;

                        // Show preview container and hide placeholder
                        imagePreviewContainer.style.display = 'block';
                        placeholderContainer.style.display = 'none';
                    };

                    // Read the file as data URL
                    reader.readAsDataURL(file);
                } else {
                    resetPreview();
                }
            });

            // Handle remove image button
            removeImageBtn.addEventListener('click', function() {
                // Clear the file input
                imageInput.value = '';
                resetPreview();
            });

            // Function to reset preview to initial state
            function resetPreview() {
                imagePreviewContainer.style.display = 'none';
                placeholderContainer.style.display = 'block';
                previewImage.src = '';
            }
        });
    </script>

    <!-- Font Awesome for icons (optional) -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
@endsection
