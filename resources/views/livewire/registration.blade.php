<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1>user registration</h1>
    @if (session()->has('success'))
    <h1 class="alert alert-info">
      {{session('success')}}
    </h1>
   
    @endif
    <form class="" wire:submit.prevent="submit" >
        <br><br>
        <input  type="text " wire:model="name" placeholder="name">
        @error('name')
          <span class="error">{{$message}} </span>  
        @enderror
        <br><br>
        <input  type="text " wire:model="email" placeholder="email"> 
         @error('email')
          <span class="error">{{$message}} </span>  
        @enderror
        <br><br>
        <input   type="password" wire:model="password" placeholder="password">
          @error('password')
          <span class="error">{{$message}} </span>  
        @enderror
        <br><br>
        <input   type="text" wire:model="bio" placeholder="About Yourself">
          @error('bio')
          <span class="error">{{$message}} </span>  
        @enderror
        <br><br>
        <button class="btn"  type="submit">Register</button>
    </form>
</div>
