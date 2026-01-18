<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();

            // Company details
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone')->nullable();

            // Job requirement details
            $table->string('job_title');
            $table->string('skills')->nullable();
            $table->string('experience_required')->nullable();
            $table->string('employment_type')->nullable(); // Full-time, Contract, etc
            $table->string('location')->nullable();
            $table->string('budget_currency', 3)->nullable();
            $table->string('budget_amount')->nullable();
            $table->string('budget_type')->nullable();
            $table->string('timeline')->nullable();

            // Additional info
            $table->text('message')->nullable();

            // Admin notes/remarks
            $table->text('admin_remarks')->nullable();

            // Status tracking
            $table->enum('status', ['New', 'In Review', 'Contacted', 'Closed'])->default('new');

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
