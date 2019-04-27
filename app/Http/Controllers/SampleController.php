<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\MembersRepositoryInterface AS MembersRepository;

class SampleController extends Controller
{
    protected $Members;

    public function __construct(MembersRepository $Members)
    {
        $this->Members = $Members;
    }

    public function index()
    {
        // $this->Members->all()
        // $this->Members->get(1)
        // $this->Members->insert('member_011');
        // $this->Members->update(11, 'member_11');
        // $this->Members->delete(11);
    }
}
