<div class="table-responsive">
    <table class="table" id="pages-table">
        <thead>
        <tr>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Small Text</th>
            {{--        <th>Text</th>--}}
            {{--        <th>Img</th>--}}
            <th>Изоброжение</th>
            <th>Ссылка на материал</th>
            <th colspan="3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->category->title }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->small_text }}</td>
                {{--            <td>{{ $page->text }}</td>--}}
                {{--            <td>{{ $page->img }}</td>--}}
                <td><img src="{{ $page->img }}" style="max-height:100px;max-width: 200px;"></td>
                <td>{{ $page->slug }}.html</td>
                <td>
                    {!! Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pages.show', [$page->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pages.edit', [$page->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
