<div class="form">
   
    @csrf
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif
    
    @if(!empty($errorMessage))
    <div class="alert alert-warning" role="alert">
        {{$errorMessage}}
    </div>
    @endif
    <div class="text-center">
        <!-- progressbar -->
        <ul class="progressbar">
            <li class="{{ $currentStep != 1 ? '' : 'active' }}"></li>
            <li class="{{ $currentStep != 2 ? '' : 'active' }}"></li>
            <li class="{{ $currentStep != 3 ? '' : 'active' }}"></li>
        </ul>
        
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('livewire.registroJCST.step1')
    
    @include('livewire.registroJCST.step2')
      
    @include('livewire.registroJCST.step3')

    
       
</div>


