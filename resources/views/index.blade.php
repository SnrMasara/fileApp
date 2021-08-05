    @extends('layouts.app')
    @section('content')
<form action="{{url('/')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <div class="form-group">
        <div
        class="py-20
                h-screen
                bg-gray-400
                px-2">
        <div
            class="max-w-md
                    mx-auto
                    bg-white
                    rounded-lg
                    overflow-hidden
                    md:max-w-lg">
        <div class="md:flex">

        <div class="w-full">

            <div class="p-4 border-b-2">
                <span class="text-lg font-bold text-gray-600">Add file to upload</span>
            </div>
                <div class="p-3">
                    <div class="mb-2">
                        <span class="text-sm"> Title </span>

                        <input type="text"
                                class="h-12 px-3 w-full
                                border-gray-200 border
                                rounded focus:outline-none
                                focus:border-gray-300"
                                name="file-name">
                            </div>
                    <div class="mb-2">
                        <span>Attachment Area</span>
                        <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                            <div class="absolute">
                                <div class="flex flex-col items-center ">
                                    <i class="fa fa-cloud-upload fa-3x text-gray-200"></i>
                                    <span class="block text-gray-400 font-normal">Attach you files here </span>
                                    <span class="block text-gray-400 font-normal">or</span>
                                    <span class="block text-blue-400 font-normal">Browse files</span>
                                </div>
                            </div>
                            <input type="file"
                                    class="h-full
                                    w-full
                                    opacity-5
                                    form-control"
                                    name="upload-file">
                        </div>
                        <div class="flex justify-between items-center text-gray-400">
                            <span> Accepted file type:.csv only </span>
                            <span class="flex items-center ">
                                <i class="fa fa-lock mr-1">
                                    </i> secure</span>
                                </div>
                    </div>
                    <div class="mt-3 text-center pb-3">
                        <button class="w-10%
                                        h-12
                                        text-lg
                                        w-32
                                        bg-blue-600
                                        rounded
                                        text-white
                                        hover:bg-blue-700"
                                        type="submit"
                                        name="submit">
                                        Upload
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>

    @endsection
