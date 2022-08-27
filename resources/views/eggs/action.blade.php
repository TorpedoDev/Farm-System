<a href="{{ route('eggsales.show', $id) }}"><i class="fa fa-eye text-primary" title="@lang('hometr.Show')"></i></a>
<a href="{{ route('eggsales.edit', $id) }}"><i class="fa fa-edit text-info" title="@lang('hometr.Edit')"></i></a>
<a href="#" onclick="destroy($(this), event)"><i class="fa fa-trash text-danger" title="@lang('hometr.Delete')"></i></a>
<form class="d-none" action="{{ route('eggsales.destroy', $id) }}" method="POST">
    @csrf
    @method('delete')
</form>
