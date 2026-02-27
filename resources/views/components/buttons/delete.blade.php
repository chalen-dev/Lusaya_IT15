@props([
    'action',
    'params' => [],
    'item_name' => 'item',
    'label' => 'Delete',
    'confirm_msg' => 'You are about to delete this item. Are you sure?'
])

<div>
    <form action="{{route($action, $params)}}" method="POST">
        @csrf
        @method('DELETE')

        <button
            type="button"
            title="Delete {{$item_name}}"
            onclick="confirmDelete(this, '{{$confirm_msg}}')"
            class="cursor-pointer"
        >
            {{$label}}
        </button>
    </form>
</div>

<script>
    function confirmDelete(button, confirm_msg){
        Swal.fire({
            title: 'Are you sure?',
            text: confirm_msg,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel'
        }).then((result) => {
            if (result.isConfirmed)
                button.closest('form').submit();
        });
    }
</script>

