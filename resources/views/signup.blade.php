<!-- filepath: /c:/xampp/htdocs/dashboard/furrytails_project/resources/views/signUp.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center tw-p-20 bgcolor-1">
                <img src="{{ asset('images/business-logo/logo.png') }}" alt="Business Logo" class="mb-4" style="max-width: 300px;">                
                <img src="{{ asset('images/icons/paw-white.png') }}" alt="white paw icon" class="mb-4 tw-w-full tw-place-self-start" style="max-width: 50px;">                
                <h2 class="font-poppins tw-font-bold tw-w-full">FurryTails</h2>
                <p class="tw-text-justify font-poppins">Easily spoil your dogs! FurryTails is your one-stop shop for scheduling your pets' comfortable boarding and expert grooming services. We've got them covered whether it's a spa day or a secure stay. Enroll right away to provide your pet with the affection and attention they merit!.</p>
            </div>

            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center tw-bg-white">
                <div class="tw-w-3/5 tw-p-6 tw-shadow-lg tw-rounded-lg tw-mt-10 tw-mb-10">
                    <div class="tw-flex tw-flex-col tw-items-center">
                        <img src="{{ asset('images/icons/signUp.png') }}" alt="User Avatar" class="tw-w-[4rem] tw-h-[4rem] tw-mb-4 tw-rounded-full">
                        <h2 class="tw-text-left tw-w-full tw-text-lg tw-font-semibold tw-mb-4 tw-text-[1.3rem]">Sign Up</h2>
                    </div>
                    
                    @if ($errors->any())
                        <div class="tw-bg-red-100 tw-border tw-border-red-400 tw-text-red-700 tw-px-4 tw-py-3 tw-rounded tw-relative tw-mb-4" role="alert">
                            <strong class="tw-font-bold">Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('signup.submit') }}" class="tw-space-y-4">
                        @csrf
                        <div class="tw-flex tw-space-x-4">
                            <div class="tw-w-1/2">
                                <label for="first_name" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">First Name</label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required 
                                    class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                            </div>
                            <div class="tw-w-1/2">
                                <label for="last_name" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">Last Name</label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required 
                                    class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                        </div>

                        <div>
                            <label for="username" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">Username</label>
                            <input type="text" id="username" name="username" value="{{ old('username') }}" required 
                                class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                        </div>

                        <div>
                            <label for="phone" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required 
                                class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                        </div>

                        <div>
                            <label for="password" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">Password</label>
                            <div class="tw-relative">
                                <input type="password" id="password" name="password" required 
                                    class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                                <span class="tw-text-xs tw-text-gray-500">Use 8 or more characters with a mix of letters, numbers & symbols</span>
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="tw-block tw-text-sm tw-font-normal tw-text-gray-700">Confirm Password</label>
                            <div class="tw-relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" required 
                                    class="tw-mt-1 tw-w-full tw-px-3 tw-py-2 tw-border tw-rounded-md tw-shadow-sm focus:tw-ring-indigo-500 focus:tw-border-indigo-500">
                            </div>
                        </div>

                        <div class="tw-text-center tw-text-sm tw-text-gray-600">
                            By creating an account, you agree to our <a href="#" class="tw-text-indigo-600 hover:tw-underline">Terms of Use</a> and <a href="#" class="tw-text-indigo-600 hover:tw-underline">Privacy Policy</a>.
                        </div>

                        <button type="submit" class="tw-bg-gray-400 tw-text-white tw-font-bold tw-py-2 tw-px-4 tw-text-sm tw-rounded-full tw-transition-all tw-duration-300 tw-ease-in-out hover:tw-bg-blue-400 tw-block tw-mx-auto">
                            Create Account
                        </button>
                    </form>

                    <p class="tw-mt-4 tw-text-center tw-text-sm tw-text-gray-600">
                        Already have an account? <a href="{{ route('login') }}" class="tw-text-indigo-600 hover:tw-underline">Log in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>