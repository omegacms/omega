@extends('layout')
@includes('parts/headers/header-small')
<div class="container mx-auto px-8 py-8 md:py-16">
    <div class="flex">
        <a href="#" class="tab w-1/3 py-2 text-center border-b-2 border-transparent hover:border-blue-500" data-tab="dashboard">
            <i class="fa fa-tachometer mr-2"></i> Dashboard
        </a>
        <a href="#" class="tab w-1/3 py-2 text-center border-b-2 border-transparent hover:border-blue-500" data-tab="users">
            <i class="fa fa-user mr-2"></i> User Profile
        </a>
        <a href="#" class="tab w-1/3 py-2 text-center border-b-2 border-transparent hover:border-blue-500" data-tab="orders">
            <i class="fa fa-shopping-cart mr-2"></i> Orders
        </a>
    </div>

    <div id="dashboard" class="tab-content mb-8">
        @includes('parts/users/dashboard')
    </div>
    <div id="users" class="tab-content hidden">
        @includes('parts/users/user')
    </div>
    <div id="orders" class="tab-content hidden">
        @includes('parts/users/orders')
    </div>
</div>