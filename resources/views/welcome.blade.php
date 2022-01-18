@extends('layouts.app')
@section('content')

<div
class="relative text-white bg-center bg-no-repeat bg-cover w-full"
style="background-image: url(https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80)"
role="banner">

    <span class="absolute inset-0 bg-black opacity-60"></span>

    <div class="relative max-w-screen-xl px-4 py-24 mx-auto sm:py-36 sm:px-6 lg:px-8 lg:h-screen lg:flex lg:items-center">
        <div class="w-1/2 mx-auto">
            <div class="w-full shadow-2xl subpixel-antialiased rounded h-64 bg-black border-black mx-auto">
                <div class="flex items-center h-6 rounded-t bg-gray-100 border-b border-gray-500 text-center text-black" id="headerTerminal">
                    <div class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3" id="closebtn">
                    </div>
                    <div class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3" id="minbtn">
                    </div>
                    <div class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3" id="maxbtn">
                    </div>
                    <div class="mx-auto pr-16" id="terminaltitle">
                        <p class="text-center text-sm">Terminal</p>
                    </div>

                </div>
                <div class="pl-1 pt-1 h-auto  text-green-200 font-mono text-xs bg-black" id="console">
                    <p class="pb-1">Last login: Wed Sep 25 09:11:04 on ttys002</p>
                    <p class="pb-1">Kong:Devprojects $</p>
                    <textarea id="text-input-textarea" class="text-xs pb-1 bg-black border-black border-transparent focus:border-transparent focus:ring-0 focus:outline-none" cols="70" rows="8" placeholder="">Kong: est une plateforme digitale professionnelle privée qui a pour but d'améliorer les relations, l’engagement, la collaboration et la productivité des collaborateurs. Nous croyons à un monde plus connecté, dans lequel tout le monde peut discuter et collaborer à distance.</textarea>
                </div>
            </div>
        </div>
    </div>

</div>
