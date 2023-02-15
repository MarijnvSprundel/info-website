{{-- No sites error page page --}}
@extends('layouts.app')

@section('content') 
<x-card>
    <x-stack-layout>
        <x-headings.section>
            Geen sites beschikbaar <?php if(isset($english)) : ?> in het Engels <?php endif; ?>
        </x-headings.section>

        <div>
            <div class="error-wrapper">
                <h1>Er zijn op dit moment geen sites beschikbaar.</h1>
                <p>Dit komt omdat er nog geen sites bestaan. probeer dit op een later moment weer.</p>
                <p>Mocht je al een student zijn, upload dan hier jou website!</p
            </div>
        </div>
    </x-stack-layout>
</x-card>
@endsection