@extends('layouts.app')

{{--content--}}


<section class="bg-white">

    <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-8 gap-x-16 lg:items-start" >
        <div class="lg:sticky lg:top-16">
            <div class="flex items-center w-full px-4 my-12  lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24 lg:h-screen lg:items-center">
                <livewire:form>
            </div>
        </div>




        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1">
            <livewire:posts/>
        </div>
      </div>
    </div>
</section>





