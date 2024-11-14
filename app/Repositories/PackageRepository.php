<?php

namespace App\Repositories;

use App\Contracts\PackageContract;
use App\Exports\PackageExport;
use App\Models\Package;
use Maatwebsite\Excel\Facades\Excel;

class PackageRepository extends BaseRepository implements PackageContract
{

    public function __construct(Package $model)
    {
        parent::__construct($model);
    }
    
    public function exportList()
    {
        return Excel::download(new PackageExport, 'packages.xlsx');
    }
}