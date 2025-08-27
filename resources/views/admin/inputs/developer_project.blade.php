@extends('admin.dashboard')
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

    .image-container {
        position: relative;
    }

    .tag-container {
        display: flex;
        flex-wrap: wrap;
        border: 1px solid #ccc;
        padding: 5px;
        border-radius: 5px;
        cursor: text;
    }

    .tag {
        background: #007bff;
        color: white;
        padding: 5px 10px;
        margin: 3px;
        border-radius: 15px;
        display: flex;
        align-items: center;
    }

    .tag span {
        margin-left: 8px;
        cursor: pointer;
        font-weight: bold;
    }

    .tag-input {
        border: none;
        flex: 1;
        min-width: 120px;
        outline: none;
        padding: 5px;
    }
</style>

<div class="container">
    <div class="container">
        <h1 class="text-center">Create Developer Project</h1>
        <hr />
        
        <form action="{{ route('developer.project.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="dev_id" class="form-control" value="{{ $id }}">
            <div class="mb-3">
                <label class="form-label">Project Image</label>
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
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>

            <div class="mb-2">
                <label for="description" class="form-label">Project Description</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description') }}">
            </div>

            <div class="mb-2">
                <label for="tech" class="form-label">Tech Stack used in Project</label>
                <div class="tag-container" id="tag-container">
                    <input type="text" id="tag-input" class="tag-input" placeholder="Type and press Enter">
                </div>
                <input type="hidden" name="tech" id="tags-hidden">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
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
    const tagContainer = document.getElementById('tag-container');
    const tagInput = document.getElementById('tag-input');
    const hiddenInput = document.getElementById('tags-hidden');

    let tags = [];

    function updateHiddenInput() {
        hiddenInput.value = JSON.stringify(tags); // save as JSON array
    }

    function addTag(tag) {
        tag = tag.trim();
        if (tag && !tags.includes(tag)) {
            tags.push(tag);

            let tagEl = document.createElement('div');
            tagEl.classList.add('tag');
            tagEl.innerHTML = `${tag} <span onclick="removeTag('${tag}')">&times;</span>`;
            tagContainer.insertBefore(tagEl, tagInput);
            updateHiddenInput();
        }
        tagInput.value = '';
    }

    function removeTag(tag) {
        tags = tags.filter(t => t !== tag);
        document.querySelectorAll('.tag').forEach(el => {
            if (el.textContent.trim() === tag + " ×") el.remove();
        });
        updateHiddenInput();
    }

    tagInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            addTag(tagInput.value);
        }
    });
</script>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection