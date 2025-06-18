<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Expense;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Policies\CategoryPolicy;
use App\Policies\ExpensePolicy;
use App\Policies\IncomeCategoryPolicy;
use App\Policies\IncomePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Expense::class => ExpensePolicy::class,
        Income::class => IncomePolicy::class,
        Category::class => CategoryPolicy::class,
        IncomeCategory::class => IncomeCategoryPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
} 