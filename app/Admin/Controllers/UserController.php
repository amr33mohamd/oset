<?php

namespace App\Admin\Controllers;

use App\Models\UsersOset;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UsersOset());

        $grid->column('id', __('<i class="fa fa-id-card"></i> Request Code '));
        $grid->column('name', __('<i class="far fa-id-badge	"></i> Name'));
        $grid->column('company', __('<i class="fas fa-briefcase"></i> Company'));
        $grid->column('phone', __('<i class="fa fa-refresh"></i> Phone'));
        $grid->column('email', __('<i class="fas fa-envelope-open"></i> Email'));
        $grid->column('created_at', __('<i class="fa fa-calendar" aria-hidden="true"></i> date'));
        $grid->column('updated_at', __('<i class="fa fa-calendar" aria-hidden="true"></i> Updated at'));

        $grid->column('file', __('<i class="fa fa-file"></i> file'))->display(function($type){
            return "<a href=\"$type\" target=\"_blank\">download</a>";

            });
            $grid->column('status', __('<i class="fa fa-paper-plane" aria-hidden="true"></i> Request Status'))->display(function($type){
              if($type == 0){
                return "not approved";

              }
              else if($type == 1 ) {
                return "approved";
              }

                });
                $grid->column('follow', __('<i class="fa fa-paper-plane" aria-hidden="true"></i> Follow Up'));
                $grid->column('paid', __('<i class="fa fa-money"></i> Recieved'));
                $grid->column('total', __('<i class="fa fa-money"></i> Total fees'));

                $grid->column( __('Rest'))->display(function($paid){
                      return $this->total - $this->paid;
                });
                $grid->column('source', __('<i class="fa fa-refresh"></i> Source'));

                $grid->column( __('Link'))->display(function($type){
                  return "<a href=\"http://osetsaudi.com/checkout/$this->id\">رابط الدفع</a>";

                    });



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
        $show = new Show(UsersSavely::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('company', __('Company'));
        $show->field('file', __('File'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new UsersSavely());

        $form->text('name', __('Name'));
        $form->text('company', __('Company'));
        $form->file('file', __('File'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));

        $form->text('follow', __('Follow Up'));
        $form->number('paid', __('Recieved'));
        $form->number('total', __('Total fees'));
$form->select('status', __('Request Status'))->options([0=>"not approved",1=>"approved"]);

        $form->text('source', __('Source'));

        return $form;
    }
}
