<a
        href="#"
        class="form-confirm btn btn-danger"
        data-form="delete-form-users-{{ $user->getKey() }}"
        data-type="warning"
        data-title="@lang('users.dialogs.delete.title')"
        data-text="@lang('users.dialogs.delete.info')"
        data-confirm-text="@lang('users.dialogs.delete.confirm')"
        data-cancel-text="@lang('users.dialogs.delete.cancel')"
>
    <i class="fa fa-trash"></i>
    @lang('dashboard.forms.delete')
</a>

{{ BsForm::delete(route('dashboard.users.destroy', $user), ['id' => 'delete-form-users-'.$user->getKey()]) }}
{{ BsForm::close() }}
