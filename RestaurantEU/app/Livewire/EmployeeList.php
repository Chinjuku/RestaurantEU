<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EmployeeList extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'tailwind';

    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(1);
        $employees = DB::table('employee')->where('firstname', 'like', '%' . $this->search . '%')->paginate(10);
        // $table = DB::table('employee')::search('firstname', $this.search)->paginate(10);
        return view('livewire.employee-list', compact('employees'));
    }
}
