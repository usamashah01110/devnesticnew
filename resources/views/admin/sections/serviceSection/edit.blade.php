@extends('admin.main')
@section('title', 'Section Three')
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
            <form action="{{ route('section.update',['section'=>'service', 'id'=> $record->id]) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf

                <!-- Logo with preview -->
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="file" class="hidden-input" name="logo" id="logoInput" accept="image/*">

                    <div id="logoPreviewContainer" class="image-preview">
                        @if($record->logo)
                            <div class="image-container">
                                <img id="previewLogo" class="preview-image"
                                     src="{{ asset('storage/'.$record->logo) }}" alt="Current Logo">
                                <div>
                                    <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeLogo">
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

                <!-- Service card title -->
                <div class="mb-3">
                    <label class="form-label">Service title</label>
                    <input type="text" class="form-control" name="title" value="{{ $record->title }}">
                </div>

                <!-- Service Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $record->description }}">
                </div>

                <!-- Link -->
                <div class="mb-3">
                    <label class="form-label">Service Link</label>
                    <input type="text" class="form-control" name="link" value="{{ $record->link }}">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>

    <!-- Image Preview Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const logoInput = document.getElementById('logoInput');
            const logoPreviewContainer = document.getElementById('logoPreviewContainer');

            logoPreviewContainer.addEventListener('click', function (e) {
                if (e.target === logoPreviewContainer || e.target.classList.contains('upload-placeholder') ||
                    e.target.classList.contains('fa-image') || e.target.tagName === 'P' || e.target.tagName === 'SMALL') {
                    logoInput.click();
                }
            });

            logoInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select a valid image file.');
                        resetLogoPreview();
                        return;
                    }
                    const maxSize = 5 * 1024 * 1024;
                    if (file.size > maxSize) {
                        alert('File size must be less than 5MB.');
                        resetLogoPreview();
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        logoPreviewContainer.innerHTML = `
                        <div class="image-container">
                            <img class="preview-image" src="${e.target.result}" alt="Preview Logo">
                            <div>
                                <button type="button" class="btn btn-sm btn-danger remove-btn" id="removeLogo">Remove Image</button>
                            </div>
                        </div>
                    `;
                        document.getElementById('removeLogo').addEventListener('click', function (e) {
                            e.stopPropagation();
                            resetLogoPreview();
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            function resetLogoPreview() {
                logoInput.value = '';
                logoPreviewContainer.innerHTML = `
                <div class="upload-placeholder">
                    <i class="fas fa-image fa-3x mb-3"></i>
                    <p>Click to upload image</p>
                    <small>Choose an image file</small>
                </div>
            `;
            }

            if (document.getElementById('removeLogo')) {
                document.getElementById('removeLogo').addEventListener('click', function (e) {
                    e.stopPropagation();
                    resetLogoPreview();
                });
            }
        });
    </script>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
