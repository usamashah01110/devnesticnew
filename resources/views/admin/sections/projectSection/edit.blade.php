@extends('admin.main')
@section('title', 'Section Four')
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
            <h1 class="text-center">{{ $title }}</h1>
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
            <form action="{{ route('section.update', ['section'=>'project', 'id'=>$record->id]) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $record->name }}">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Project Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $record->description }}">
                </div>

                <!-- Type Select -->
                <div class="mb-3">
                    <label class="form-label">Select Project Type</label>
                    <select class="form-control" name="type">
                        <option selected disabled>-- Choose Project Type --</option>
                        <option value="filter-app" {{ $record->type == 'filter-app' ? 'selected' : '' }}>App
                        </option>
                        <option value="filter-product" {{ $record->type == 'filter-product' ? 'selected' : '' }}>
                            Product
                        </option>
                        <option value="filter-branding" {{ $record->type == 'filter-branding' ? 'selected' : '' }}>
                            Branding
                        </option>
                        <option value="filter-books" {{ $record->type == 'filter-books' ? 'selected' : '' }}>
                            Books
                        </option>
                    </select>
                </div>

                <!-- Project Banner with preview -->
                <div class="mb-3">
                    <label class="form-label">Project Banner</label>
                    <input type="file" class="hidden-input" name="image" id="imageInput" accept="image/*">

                    <div id="imagePreviewContainer" class="image-preview">
                        @if($record->image)
                            <div class="image-container">
                                <img id="previewImage" class="preview-image"
                                     src="{{ asset('storage/'.$record->image) }}" alt="Current Banner">
                                <div>
                                    <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeImage">
                                        Remove Image
                                    </button>
                                </div>
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

                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>

    <!-- Image Preview Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('imageInput');
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');

            imagePreviewContainer.addEventListener('click', function (e) {
                if (e.target === imagePreviewContainer || e.target.classList.contains('upload-placeholder') ||
                    e.target.classList.contains('fa-image') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                    imageInput.click();
                }
            });

            imageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select a valid image file.');
                        resetImagePreview();
                        return;
                    }
                    const maxSize = 5 * 1024 * 1024;
                    if (file.size > maxSize) {
                        alert('File size must be less than 5MB.');
                        resetImagePreview();
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreviewContainer.innerHTML = `
                        <div class="image-container">
                            <img class="preview-image" src="${e.target.result}" alt="Preview Banner">
                            <div>
                                <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeImage">Remove Image</button>
                            </div>
                        </div>
                    `;
                        document.getElementById('removeImage').addEventListener('click', function (e) {
                            e.stopPropagation();
                            resetImagePreview();
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            function resetImagePreview() {
                imageInput.value = '';
                imagePreviewContainer.innerHTML = `
                <div class="upload-placeholder">
                    <i class="fas fa-image fa-3x mb-3"></i>
                    <p>Click to upload image</p>
                    <small>Choose an image file</small>
                </div>
            `;
            }

            if (document.getElementById('removeImage')) {
                document.getElementById('removeImage').addEventListener('click', function (e) {
                    e.stopPropagation();
                    resetImagePreview();
                });
            }
        });
    </script>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
