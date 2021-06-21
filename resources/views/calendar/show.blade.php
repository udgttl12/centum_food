@extends('include.layout_calendar')

@push('scripts')
    <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('#btn_edit').click(function () {
               var url = $(this).data('url');
               location.href = url;
            });

        })
    </script>
@endpush

@section('content')
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">음식 달력</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        내가 먹은 음식 기록 하는 달력
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{route('calendar.store')}}" method="POST">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="food" class="block text-sm font-medium text-gray-700">
                                        음식이름
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        {{$foodCalendar->food}}
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700">
                                    내용
                                </label>
                                <div class="mt-1">
                                    {{$foodCalendar->content}}
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="date" class="block text-sm font-medium text-gray-700">
                                        Date
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        {{$foodCalendar->date}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="button"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    id="btn_edit"
                                    data-url="{{route('calendar.edit',$foodCalendar->id)}}"
                            >
                                수정
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
