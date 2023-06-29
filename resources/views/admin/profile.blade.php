<!DOCTYPE html>
<html lang="en">
    
    @section('title')

    @endsection
    @include('layouts.head')


<body>
    <!-- Scripts -->



    @include('admin.nav')
  
    @include('admin.aside')

    
  
  <div class="p-4 sm:ml-64">
     <div class="p-4 border-1 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
    
                    <x-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
    
                    <x-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
    
                    <x-section-border />
                @endif
    
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />
    
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
     </div>
  </div>

  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
