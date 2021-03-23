<?php

namespace App\Admin\Controllers;

use App\Models\ContactsOset;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactsOset());

        $grid->column('id', __('<i class="fa fa-id-card"></i> Id'));
        $grid->column('name', __('<i class="far fa-id-badge	"></i> Name'));
        $grid->column('email', __('<i class="fas fa-envelope-open"></i> Email'));
        $grid->column('messgae', __('<i class="fas fa-inbox"></i> Message'));
        $grid->column('created_at', __('<i class="fa fa-calendar" aria-hidden="true"></i> created at'));
        $grid->column('updated_at', __('<i class="fa fa-calendar" aria-hidden="true"></i> Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ContactsSavely::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('messgae', __('Messgae'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ContactsSavely());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('messgae', __('Messgae'));

        return $form;
    }
}
