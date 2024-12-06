<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .picture {
            width: 10rem;
            height: 10rem;
        }

        .back-btn {
            text-decoration: none;
            padding: .5rem;
            background: #009b29;
            color: white;
            border-radius: .25rem;
        }

        label {
            font-weight: 500;
        }

        .error {
            color: #ff0000;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{ route('dashboard') }}" class="back-btn">Back</a>

        <h1 class="mt-2">Edit CV</h1>
        <form action="{{ route('resume.update', $cv->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="mb-3">
                <img src="{{ asset('storage/' . $cv->picture) }}" alt="Image" class="img-thumbnail picture">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ ucwords($cv->name) }}" class="form-control">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $cv->email }}" class="form-control">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="contact">Contact</label>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping">+63</span>
                    <input type="number" name="contact" value="{{ $cv->contact }}" class="form-control">
                    @error('contact')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $cv->address }}" class="form-control">
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="civilStatus">Civil Status</label>
                <input type="text" name="civilStatus" value="{{ $cv->status }}" class="form-control">
                @error('civilStatus')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="summary">Objective</label>
                <textarea name="summary" class="form-control" rows="4">{{ $cv->summary }}</textarea>
                @error('summary')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="">Education</label>
                <input name="course" class="form-control mb-3" value="{{ $cv->course }}" placeholder="Enter course">
                @error('course')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input name="schoolName" class="form-control mb-3" value="{{ $cv->schoolName }}"
                    placeholder="Enter college">
                @error('schoolName')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input name="schoolYear" class="form-control mb-3" value="{{ $cv->schoolYear }}"
                    placeholder="Enter year">
                @error('schoolYear')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="skills">Skills</label>
                <input name="skills1" class="form-control mb-3" value="{{ $cv->skills1 }}" placeholder="Add skill">
                @error('skills1')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input name="skills2" class="form-control mb-3" value="{{ $cv->skills2 }}" placeholder="Add skill">
                @error('skills2')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input name="skills3" class="form-control mb-3" value="{{ $cv->skills3 }}" placeholder="Add skill">
                @error('skills3')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input name="skills4" class="form-control mb-3" value="{{ $cv->skills4 }}"
                    placeholder="Add skill">
                @error('skills4')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="application_link">Application Link</label>
                <input type="text" name="applicationLink" value="{{ $cv->applicationLink }}"
                    class="form-control">
                @error('applicationLink')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="N/A" {{ $cv->applicationStatus == 'N/A' ? 'selected' : '' }}>N/A</option>
                    <option value="Received" {{ $cv->applicationStatus == 'Received' ? 'selected' : '' }}>
                        Received</option>
                    <option value="Reviewed" {{ $cv->applicationStatus == 'Reviewed' ? 'selected' : '' }}>
                        Reviewed</option>
                    <option value="Referred" {{ $cv->applicationStatus == 'Referred' ? 'selected' : '' }}>
                        Referred</option>
                    <option value="Selected" {{ $cv->applicationStatus == 'Selected' ? 'selected' : '' }}>
                        Selected</option>
                    <option value="Hired" {{ $cv->applicationStatus == 'Hired' ? 'selected' : '' }}>Hired
                    </option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="certifications">Certifications</label>
                <input name="certifications1" class="form-control mb-3" value="{{ $cv->certifications1 }}"
                    placeholder="+Add certification">
                @error('certifications1')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input name="certifications2" class="form-control mb-3" value="{{ $cv->certifications2 }}"
                    placeholder="+Add certification">
                @error('certifications2')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mb-3">Save Changes</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
