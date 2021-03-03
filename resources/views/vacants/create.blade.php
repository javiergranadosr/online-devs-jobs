@extends('layouts.app')

<!-- STYLES -->
@section('styles')
    <!-- CDN MEDIUMTEXT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css"
          integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw=="
          crossorigin="anonymous"/>
    <!-- CDN DROPZONE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.min.css"
          integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
          crossorigin="anonymous"/>
@endsection

@section('navegation')
    @include('includes.navbar')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>


    <form action="" class="max-w-lg mx-auto my-10">


        <!-- Title of category -->
        <div class="mb-5">
            <label for="title" class="block text-gray-700 text-sm mb-2">Titulo de la vacante:</label>
            <input
                id="title"
                type="text"
                class="p-2 bg-white rounded form-input w-full @error('title') border-red-500 border @enderror"
                name="title"
                placeholder="Nombre de la vacante"
                value="{{ old('title') }}"
            >
        </div>

        <!-- Category -->

        <div class="mb-5">
            <label for="category" class="block text-gray-700 text-sm mb-2">Categoría:</label>
            <select
                class="
                p-2
                block appearance-none w-full border
                border-gray-200 text-gray-700 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500 bg-white"
                name="category" id="category">

                <option value="" disabled selected>Seleccione la categoría</option>
                @foreach($categories AS $category)
                    <option value=" {{$category->id}} "> {{$category->name}} </option>
                @endforeach
            </select>
        </div>

        <!-- Experience -->

        <div class="mb-5">
            <label for="experience" class="block text-gray-700 text-sm mb-2">Experiencia:</label>
            <select
                class="
                p-2
                block appearance-none w-full border
                border-gray-200 text-gray-700 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500 bg-white"
                name="experience" id="experience">

                <option value="" disabled selected>Seleccione la experiencia</option>
                @foreach($experiences AS $experience)
                    <option value=" {{$experience->id}} "> {{$experience->name}} </option>
                @endforeach
            </select>
        </div>

        <!-- Ubications -->

        <div class="mb-5">
            <label for="ubication" class="block text-gray-700 text-sm mb-2">Ubicación:</label>
            <select
                class="
                p-2
                block appearance-none w-full border
                border-gray-200 text-gray-700 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500 bg-white"
                name="ubication" id="ubication">

                <option value="" disabled selected>Seleccione la ubicación</option>
                @foreach($ubications AS $ubication)
                    <option value=" {{$ubication->id}} "> {{$ubication->name}} </option>
                @endforeach
            </select>
        </div>

        <!-- Salaries -->

        <div class="mb-5">
            <label for="salary" class="block text-gray-700 text-sm mb-2">Salario:</label>
            <select
                class="
                p-2
                block appearance-none w-full border
                border-gray-200 text-gray-700 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500 bg-white"
                name="salary" id="salary">

                <option value="" disabled selected>Seleccione el salario</option>
                @foreach($salaries AS $salary)
                    <option value=" {{$salary->id}} "> {{$salary->name}} </option>
                @endforeach
            </select>
        </div>


        <!-- Employement description-->

        <div class="mb-5">
            <label for="description" class="block text-gray-700 text-sm mb-2">Descripción del puesto:</label>
            <div class="editable  p-2 bg-white rounded form-input w-full "></div>
            <input type="hidden" name="description" id="description">
        </div>

        <!-- Employement image -->
        <div class="mb-5">
            <label for="image" class="block text-gray-700 text-sm mb-2">Imagen del puesto:</label>
            <div id="dropzone" class=" dropzone bg-white rounded "></div>
            <p id="error"></p>
        </div>


        <button
            type="submit"
            class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase"
        >
            Publicar vacante
        </button>

    </form>

@endsection

<!-- SCRIPTS -->
@section('scripts')
    <!-- CDN MEDIUMTEXT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js"
            integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA=="
            crossOrigin="anonymous"></script>

    <!-- CDN DROPZONE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js"
            integrity="sha512-KgeSi6qqjyihUcmxFn9Cwf8dehAB8FFZyl+2ijFEPyWu4ZM8ZOQ80c2so59rIdkkgsVsuTnlffjfgkiwDThewQ=="
            crossorigin="anonymous"></script>

    <script>
        // Configuration mediumtext
        const configurationMediumText = () => {
            // Object configuration
            const configuration = {
                toolbar: {
                    buttons: [
                        'bold',
                        'italic',
                        'underline',
                        'quote',
                        'anchor',
                        'justifyLeft',
                        'justifyCenter',
                        'justifyRight',
                        'justifyFull',
                        'orderedList',
                        'unorderedList',
                        'h2',
                        'h3'],
                    static: true,
                    sticky: true
                },
                placeholder: false
            }
            // Init editor mediumtext
            const editor = new MediumEditor('.editable', configuration);

            // set content in input type hidden
            const getContentMediumText = () => {
                const contentMediumText = editor.getContent();
                document.querySelector('#description').value = contentMediumText;
            }

            editor.subscribe('editableInput', getContentMediumText);

        }
        // Configuration dropzone
        Dropzone.autoDiscover = false;
        const configurationDropzone = () => {
            const configuration = {
                url:'/vacants/image',
                dictDefaultMessage: 'Sube aquí tu archivo',
                acceptedFiles: '.png, .jpg, .jpeg, .gif, .bmp',
                addRemoveLinks:true,
                dictRemoveFile: 'Borrar archivo',
                maxFiles:1,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                success: function (file, response ){
                   document.querySelector('#error').textContent = '';
                },
                error: function(file, response) {
                    document.querySelector('#error').textContent = 'Formato no válido.';
                },
                maxfilesexceeded: function (file) {
                    if (this.files[1] !== null) {
                        this.removeFile(this.files[0]); // Delete previous archive
                        this.addFile(file); // add new archive
                    }
                },
                removedfile: function (file, response) {
                    console.log("El archivo borrado fue: ", file)
                }

            }
            const dropzone = new Dropzone('#dropzone',configuration)
        }

        document.addEventListener('DOMContentLoaded', configurationMediumText);
        document.addEventListener('DOMContentLoaded', configurationDropzone);
    </script>
@endsection

