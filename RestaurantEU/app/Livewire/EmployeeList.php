<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EmployeeList extends Component
{
    use WithPagination;

    public $search = '', $employee_id, $firstname, $lastname, $phone, $roles, $thairoles;

    protected $paginationTheme = 'tailwind';
    
    public function reinitializeAlpine()
    {
        $this->emit('reinitializeAlpine');
        $this->dispatchBrowserEvent('refreshPage');
    }
    public $isModalOpen = false, $isModalOpen2 = false;

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }
    public function toggleModal2($id)
    {
        $this->isModalOpen2 = !$this->isModalOpen2;
        $showupdate = DB::table('employee')->where('employee_id' , $id)->first();
        if ($showupdate) {
            $this->employee_id = $showupdate->employee_id;
            $this->firstname = $showupdate->firstname;
            $this->lastname = $showupdate->lastname;
            $this->phone = $showupdate->phone;
            $this->roles = $showupdate->roles;
            if($showupdate->roles == "manager") {
                $this->thairoles = "ผู้จัดการ";
            }
            elseif ($showupdate->roles == "cashier"){
                $this->thairoles = "แคชเชียร์";
            }
            elseif ($showupdate->roles == "waiter"){
                $this->thairoles = "พนักงานเสิร์ฟ";
            }
            elseif ($showupdate->roles == "chef"){
                $this->thairoles = "เชฟ";
            }
        }
    }
    public function placeholder() {
        return view('loading');
    }
    public function render()
    {
        sleep(0.8);
        $employees = DB::table('employee')->where('firstname', 'like', '%' . $this->search . '%')->paginate(10);
        // $table = DB::table('employee')::search('firstname', $this.search)->paginate(10);
        return view('livewire.employee-list', compact('employees'));
    }
}
