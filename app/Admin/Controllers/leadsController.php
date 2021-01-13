<?php

namespace App\Admin\Controllers;

use App\Models\leads;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\lead_status;
use App\Models\nationality;
use App\Models\user;
use App\Models\industry;
use App\Models\application_types;
use App\Models\education_qualifications;
use App\Models\traffic_mediums;
use App\Models\hear_about_us;

class leadsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'leads';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new leads());

        $grid->column('id', __('Id'));
        $grid->column('assignment_date', __('Assignment date'));
        $grid->column('last_name', __('Last name'));
        $grid->column('owner', __('Owner'));
        $grid->column('status_id', __('Status id'))->display(function($id){
            $user = lead_status::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('nationality_id', __('Nationality id'))->display(function($id){
            $user = nationality::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('contact_number', __('Contact number'));
        $grid->column('prefered_office_location', __('Prefered office location'));
        $grid->column('current_location', __('Current location'));
        $grid->column('user_id', __('User id'))->display(function($id){
            $user = user::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }

        });;
        $grid->column('message', __('Message'));
        $grid->column('image', __('Image'));
        $grid->column('code', __('Code'));
        $grid->column('title', __('Title'));
        $grid->column('country_code', __('Country code'));
        $grid->column('gender', __('Gender'));
        $grid->column('traffic_source_id', __('Traffic source id'));
        $grid->column('company', __('Company'));
        $grid->column('industry_id', __('Industry id'))->display(function($id){
            $user = industry::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('application_type_id', __('Application type id'))->display(function($id){
            $user = application_types::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('first_name', __('First name'));
        $grid->column('birthday', __('Birthday'));
        $grid->column('education_qualification_id', __('Education qualification id'))->display(function($id){
            $user = education_qualifications::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('traffic_medium_id', __('Traffic medium id'))->display(function($id){
            $user = traffic_mediums::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('secondary_email', __('Secondary email'));
        $grid->column('resume_recieved', __('Resume recieved'));
        $grid->column('follow_up', __('Follow up'));
        $grid->column('enquiry', __('Enquiry'));
        $grid->column('postal_code', __('Postal code'));
        $grid->column('ielts', __('Ielts'));
        $grid->column('age', __('Age'));
        $grid->column('traffic_campaign', __('Traffic campaign'));
        $grid->column('currency_id', __('Currency id'));
        $grid->column('state', __('State'));
        $grid->column('no_of_applicants', __('No of applicants'));
        $grid->column('traffic_content', __('Traffic content'));
        $grid->column('resume', __('Resume'));
        $grid->column('resume_id', __('Resume id'));
        $grid->column('hear_about_us_id', __('Hear about us id'))->display(function($id){
            $user = hear_about_us::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('city', __('City'));
        $grid->column('maritial_status', __('Maritial status'));
        $grid->column('traffic_ip', __('Traffic ip'));
        $grid->column('country', __('Country'));
        $grid->column('booking_date', __('Booking date'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('enquiry_age', __('Enquiry age'));
        $grid->column('traffic_url', __('Traffic url'));
        $grid->column('appointment_date', __('Appointment date'));
        $grid->column('website', __('Website'));
        $grid->column('fax', __('Fax'));
        $grid->column('billing_city', __('Billing city'));
        $grid->column('billing_street', __('Billing street'));
        $grid->column('billing_state', __('Billing state'));
        $grid->column('billing_postal_code', __('Billing postal code'));
        $grid->column('shipping_city', __('Shipping city'));
        $grid->column('shipping_street', __('Shipping street'));
        $grid->column('shipping_state', __('Shipping state'));
        $grid->column('shipping_postal_code', __('Shipping postal code'));
        $grid->column('employees', __('Employees'));
        $grid->column('email_type', __('Email type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(leads::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('assignment_date', __('Assignment date'));
        $show->field('last_name', __('Last name'));
        $show->field('owner', __('Owner'));
        $show->field('status_id', __('Status id'));
        $show->field('nationality_id', __('Nationality id'));
        $show->field('contact_number', __('Contact number'));
        $show->field('prefered_office_location', __('Prefered office location'));
        $show->field('current_location', __('Current location'));
        $show->field('user_id', __('User id'));
        $show->field('message', __('Message'));
        $show->field('image', __('Image'));
        $show->field('code', __('Code'));
        $show->field('title', __('Title'));
        $show->field('country_code', __('Country code'));
        $show->field('gender', __('Gender'));
        $show->field('traffic_source_id', __('Traffic source id'));
        $show->field('company', __('Company'));
        $show->field('industry_id', __('Industry id'));
        $show->field('application_type_id', __('Application type id'));
        $show->field('first_name', __('First name'));
        $show->field('birthday', __('Birthday'));
        $show->field('education_qualification_id', __('Education qualification id'));
        $show->field('traffic_medium_id', __('Traffic medium id'));
        $show->field('secondary_email', __('Secondary email'));
        $show->field('resume_recieved', __('Resume recieved'));
        $show->field('follow_up', __('Follow up'));
        $show->field('enquiry', __('Enquiry'));
        $show->field('postal_code', __('Postal code'));
        $show->field('ielts', __('Ielts'));
        $show->field('age', __('Age'));
        $show->field('traffic_campaign', __('Traffic campaign'));
        $show->field('currency_id', __('Currency id'));
        $show->field('state', __('State'));
        $show->field('no_of_applicants', __('No of applicants'));
        $show->field('traffic_content', __('Traffic content'));
        $show->field('resume', __('Resume'));
        $show->field('resume_id', __('Resume id'));
        $show->field('hear_about_us_id', __('Hear about us id'));
        $show->field('city', __('City'));
        $show->field('maritial_status', __('Maritial status'));
        $show->field('traffic_ip', __('Traffic ip'));
        $show->field('country', __('Country'));
        $show->field('booking_date', __('Booking date'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('enquiry_age', __('Enquiry age'));
        $show->field('traffic_url', __('Traffic url'));
        $show->field('appointment_date', __('Appointment date'));
        $show->field('website', __('Website'));
        $show->field('fax', __('Fax'));
        $show->field('billing_city', __('Billing city'));
        $show->field('billing_street', __('Billing street'));
        $show->field('billing_state', __('Billing state'));
        $show->field('billing_postal_code', __('Billing postal code'));
        $show->field('shipping_city', __('Shipping city'));
        $show->field('shipping_street', __('Shipping street'));
        $show->field('shipping_state', __('Shipping state'));
        $show->field('shipping_postal_code', __('Shipping postal code'));
        $show->field('employees', __('Employees'));
        $show->field('email_type', __('Email type'));
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
        $form = new Form(new leads());

        $form->date('assignment_date', __('Assignment date'))->default(date('Y-m-d'));
        $form->text('last_name', __('Last name'));
        $form->text('owner', __('Owner'));
        $form->select('status_id', __('Status id'))->options(lead_status::all()->pluck('name', 'id'));
        $form->number('nationality_id', __('Nationality id'));
        $form->text('contact_number', __('Contact number'));
        $form->text('prefered_office_location', __('Prefered office location'));
        $form->text('current_location', __('Current location'));
        $form->number('user_id', __('User id'));
        $form->text('message', __('Message'));
        $form->image('image', __('Image'));
        $form->text('code', __('Code'));
        $form->text('title', __('Title'));
        $form->text('country_code', __('Country code'));
        $form->text('gender', __('Gender'));
        $form->number('traffic_source_id', __('Traffic source id'));
        $form->text('company', __('Company'));
        $form->number('industry_id', __('Industry id'));
        $form->number('application_type_id', __('Application type id'));
        $form->text('first_name', __('First name'));
        $form->date('birthday', __('Birthday'))->default(date('Y-m-d'));
        $form->number('education_qualification_id', __('Education qualification id'));
        $form->number('traffic_medium_id', __('Traffic medium id'));
        $form->text('secondary_email', __('Secondary email'));
        $form->number('resume_recieved', __('Resume recieved'));
        $form->date('follow_up', __('Follow up'))->default(date('Y-m-d'));
        $form->text('enquiry', __('Enquiry'));
        $form->text('postal_code', __('Postal code'));
        $form->number('ielts', __('Ielts'));
        $form->number('age', __('Age'));
        $form->text('traffic_campaign', __('Traffic campaign'));
        $form->number('currency_id', __('Currency id'));
        $form->text('state', __('State'));
        $form->text('no_of_applicants', __('No of applicants'));
        $form->text('traffic_content', __('Traffic content'));
        $form->number('resume', __('Resume'));
        $form->text('resume_id', __('Resume id'));
        $form->number('hear_about_us_id', __('Hear about us id'));
        $form->text('city', __('City'));
        $form->number('maritial_status', __('Maritial status'));
        $form->text('traffic_ip', __('Traffic ip'));
        $form->text('country', __('Country'));
        $form->date('booking_date', __('Booking date'))->default(date('Y-m-d'));
        $form->email('email', __('Email'));
        $form->text('address', __('Address'));
        $form->text('enquiry_age', __('Enquiry age'));
        $form->text('traffic_url', __('Traffic url'));
        $form->date('appointment_date', __('Appointment date'))->default(date('Y-m-d'));
        $form->text('website', __('Website'));
        $form->text('fax', __('Fax'));
        $form->text('billing_city', __('Billing city'));
        $form->text('billing_street', __('Billing street'));
        $form->text('billing_state', __('Billing state'));
        $form->text('billing_postal_code', __('Billing postal code'));
        $form->text('shipping_city', __('Shipping city'));
        $form->text('shipping_street', __('Shipping street'));
        $form->text('shipping_state', __('Shipping state'));
        $form->text('shipping_postal_code', __('Shipping postal code'));
        $form->text('employees', __('Employees'));
        $form->text('email_type', __('Email type'));

        return $form;
    }
}
