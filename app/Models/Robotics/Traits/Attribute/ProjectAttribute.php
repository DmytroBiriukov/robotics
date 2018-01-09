<?php

namespace App\Models\Robotics\Traits\Attribute;

/**
 * Trait UserAttribute.
 */
trait ProjectAttribute
{

/*    public function getStatusLabelAttribute()
    {
        if ($this->isActive()) {
            return "<span class='badge badge-success'>".__('labels.general.active').'</span>';
        }

        return "<span class='badge badge-danger'>".__('labels.general.inactive').'</span>';
    }*/


/*    public function getConfirmedLabelAttribute()
    {
        if ($this->isConfirmed()) {
            if ($this->id != 1 && $this->id != auth()->id()) {
                return '<a href="'.route('admin.auth.user.unconfirm',
                        $this).'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.users.unconfirm').'" name="confirm_item"><span class="badge badge-success" style="cursor:pointer">'.__('labels.general.yes').'</span></a>';
            } else {
                return '<span class="badge badge-success">'.__('labels.general.yes').'</span>';
            }
        }

        return '<a href="'.route('admin.auth.user.confirm', $this).'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.users.confirm').'" name="confirm_item"><span class="badge badge-danger" style="cursor:pointer">'.__('labels.general.no').'</span></a>';
    }*/


/*    public function getRolesLabelAttribute()
    {
        $roles = $this->getRoleNames()->toArray();

        if (count($roles)) {
            return implode(', ', array_map(function ($item) {
                return ucwords($item);
            }, $roles));
        }

        return 'N/A';
    }*/


/*    public function getPermissionsLabelAttribute()
    {
        $permissions = $this->getDirectPermissions()->toArray();

        if (count($permissions)) {
            return implode(', ', array_map(function ($item) {
                return ucwords($item['name']);
            }, $permissions));
        }

        return 'N/A';
    }*/


/*    public function getFullNameAttribute()
    {
        return $this->last_name
            ? $this->first_name.' '.$this->last_name
            : $this->first_name;
    }*/


/*    public function getNameAttribute()
    {
        return $this->full_name;
    }*/


/*    public function getPictureAttribute()
    {
        return $this->getPicture();
    }*/


/*    public function getSocialButtonsAttribute()
    {
        $accounts = [];

        foreach ($this->providers as $social) {
            $accounts[] = '<a href="'.route('admin.auth.user.social.unlink',
                    [$this, $social]).'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.users.unlink').'" data-method="delete"><i class="fa fa-'.$social->provider.'"></i></a>';
        }

        return count($accounts) ? implode(' ', $accounts) : 'None';
    }*/



/*
    public function getClearSessionButtonAttribute()
    {
        if ($this->id != auth()->id() && config('session.driver') == 'database') {
            return '<a href="'.route('admin.auth.user.clear-session', $this).'"
			 	 data-trans-button-cancel="'.__('buttons.general.cancel').'"
                 data-trans-button-confirm="'.__('buttons.general.continue').'"
                 data-trans-title="'.__('strings.backend.general.are_you_sure').'"
                 class="dropdown-item" name="confirm_item">'.__('buttons.backend.access.users.clear_session').'</a> ';
        }

        return '';
    }*/


    public function getShowButtonAttribute()
    {
        return '<a href="'.route('admin.robotics.projects.show', $this).'" class="btn btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.view').'"></i></a>';
    }


    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.robotics.projects.edit', $this).'" class="btn btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }

/*    public function getChangePasswordButtonAttribute()
    {
        return '<a href="'.route('admin.auth.user.change-password', $this).'" class="dropdown-item">'.__('buttons.backend.access.users.change_password').'</a> ';
    }*/


/*    public function getStatusButtonAttribute()
    {
        if ($this->id != auth()->id()) {
            switch ($this->active) {
                case 0:
                    return '<a href="'.route('admin.auth.user.mark', [
                            $this,
                            1,
                        ]).'" class="dropdown-item">'.__('buttons.backend.access.users.activate').'</a> ';
                // No break

                case 1:
                    return '<a href="'.route('admin.auth.user.mark', [
                            $this,
                            0,
                        ]).'" class="dropdown-item">'.__('buttons.backend.access.users.deactivate').'</a> ';
                // No break

                default:
                    return '';
                // No break
            }
        }

        return '';
    }*/


/*    public function getConfirmedButtonAttribute()
    {
        if (! $this->isConfirmed() && ! config('access.users.requires_approval')) {
            return '<a href="'.route('admin.auth.user.account.confirm.resend', $this).'" class="dropdown-item">'.__('buttons.backend.access.users.resend_email').'</a> ';
        }

        return '';
    }*/


    public function getDeleteButtonAttribute()
    {
            return '<a href="'.route('admin.robotics.projects.destroy', $this).'"
                 data-method="delete"
                 data-trans-button-cancel="'.__('buttons.general.cancel').'"
                 data-trans-button-confirm="'.__('buttons.general.crud.delete').'"
                 data-trans-title="'.__('strings.backend.general.are_you_sure').'"
                 class="dropdown-item">'.__('buttons.general.crud.delete').'</a> ';
    }



    public function getActionButtonsAttribute()
    {
        return '
    	<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
		  '.$this->show_button.'
		  '.$this->edit_button.'
		
		  <div class="btn-group" role="group">
			<button id="userActions" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  More
			</button>
			<div class="dropdown-menu" aria-labelledby="userActions">
			  '.$this->delete_button.'
			</div>
		  </div>
		</div>';
    }
}
