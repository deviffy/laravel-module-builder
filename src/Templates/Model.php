<?php
namespace %%NAMESPACE%%;

use Illuminate\Database\Eloquent\Model;

class %%CLASS%% extends Model {

    %%SOFT_DELETE_USE%%
    %%SOFT_DELETE_DATES%%

    protected %%table = '%%TABLENAME%%';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected %%fillable = [%%FILLABLE%%];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected %%hidden = [%%HIDDEN%%];

    %%ENUMS%%
}
