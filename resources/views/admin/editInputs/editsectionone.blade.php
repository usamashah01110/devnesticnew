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
            <h1 class="text-center">{{ $title }}</h1>
            <hr/>
            <form action="{{ route('section.one.update', $sectionOne->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Heading One</label>
                    <input type="text" class="form-control" name="heading_one" value="{{ $sectionOne->heading_one }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Paragraph</label>
                    <textarea class="form-control" name="paragraph" rows="3">{{ $sectionOne->paragraph }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Button Text</label>
                    <input type="text" class="form-control" name="btn_one_text" value="{{ $sectionOne->btn_one_text }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Years</label>
                    <input type="text" class="form-control" name="years" value="{{ $sectionOne->years }}">
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
                    <!-- Hidden file input -->
                    <input type="file" class="hidden-input" name="image_path" id="imageInput" accept="image/*">
                    
                    <!-- Image Preview Container (also acts as upload area) -->
                    <div id="imagePreviewContainer" class="image-preview">
                        @if($sectionOne->image_path)
                            <div class="image-container">
                                <img id="previewImage" class="preview-image" src="{{ asset('storage/'.$sectionOne->image_path) }}" alt="Current Image">
                                <div>
                                    <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeImage">
                                        Remove Image
                                    </button>
                                </div>
                            </div>
                        @else
                            <div id="placeholderContainer">
                                <div class="upload-placeholder">
                                    <i class="fas fa-image fa-3x mb-3"></i>
                                    <p>Click to upload image</p>
                                    <small>Choose an image file</small>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('imageInput');
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');
            let removeImageBtn = document.getElementById('removeImage');

            // Make the preview container clickable
            imagePreviewContainer.addEventListener('click', function(e) {
                // Only trigger file input if clicking on the container itself, not buttons inside it
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
                        // Update the preview container with new image
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
                        
                        // Re-attach event listener to the new remove button
                        document.getElementById('removeImage').addEventListener('click', function(e) {
                            e.stopPropagation();
                            resetPreview();
                        });
                    };

                    // Read the file as data URL
                    reader.readAsDataURL(file);
                }
            });

            // Attach event listener to initial remove button if it exists
            if (removeImageBtn) {
                removeImageBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    resetPreview();
                });
            }

            // Function to reset preview to initial state
            function resetPreview() {
                // Clear the file input
                imageInput.value = '';
                
                // Reset the preview container
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











    <!-- Font Awesome for icons (optional) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection