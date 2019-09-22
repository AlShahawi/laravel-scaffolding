<div class="btn-group">
    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span> @lang('dashboard.lists.actions.options')
    </button>
    <ul class="dropdown-menu">
        @if(true)
            <li>
                <a href="{{ route('dashboard.users.show', $user) }}">
                    <i class="fa fa-eye"></i>
                    @lang('dashboard.lists.actions.show')
                </a>
            </li>
        @endif
        @if(true)
            <li>
                <a href="{{ route('dashboard.users.edit', $user) }}">
                    <i class="fa fa-edit"></i>
                    @lang('dashboard.lists.actions.edit')
                </a>
            </li>
        @endif
        @if(true)
            <li>
                <a href="#"
                        class="form-confirm"
                        data-form="delete-form-users-{{ $user->getKey() }}"
                        data-type="warning"
                        data-title="@lang('users.dialogs.delete.title')"
                        data-text="@lang('users.dialogs.delete.info')"
                        data-confirm-text="@lang('users.dialogs.delete.confirm')"
                        data-cancel-text="@lang('users.dialogs.delete.cancel')"
                >
                    <i class="fa fa-trash"></i>
                    @lang('dashboard.lists.actions.delete')
                </a>

                {{ BsForm::delete(route('dashboard.users.destroy', $user), [
                    'id' => 'delete-form-users-'.$user->getKey()
                ]) }}
                {{ BsForm::close() }}
            </li>
        @endif
    </ul>
</div>
