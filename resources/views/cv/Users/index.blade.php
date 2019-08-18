@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">supervised_user_circle</i>
                </div>
                <h4 class="card-title ">List Users</h4>
                <hr>
                <a class="btn btn-default btn-fill " data-toggle="collapse" href="#collapseFilter" role="button" aria-expanded="false"><i class="material-icons">filter_list</i></a>
                <a class="btn btn-primary btn-fill pull-right" href="{{route('user.create')}}">New User</a>
                <div class="collapse" id="collapseFilter">

                    <div class="card card-body">
                        <h3>Filters</h3>
                        <form>
                            <div class="form-row">
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Full name">
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>

                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Country
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Salary
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Dakota Rice
                            </td>
                            <td>
                                Niger
                            </td>
                            <td>
                                Oud-Turnhout
                            </td>
                            <td>
                                $36,738
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Minerva Hooper
                            </td>
                            <td>
                                Curaçao
                            </td>
                            <td>
                                Sinaai-Waas
                            </td>
                            <td>
                                $23,789
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Sage Rodriguez
                            </td>
                            <td>
                                Netherlands
                            </td>
                            <td>
                                Baileux
                            </td>
                            <td>
                                $56,142
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                Philip Chaney
                            </td>
                            <td>
                                Korea, South
                            </td>
                            <td>
                                Overland Park
                            </td>
                            <td>
                                $38,735
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                Doris Greene
                            </td>
                            <td>
                                Malawi
                            </td>
                            <td>
                                Feldkirchen in Kärnten
                            </td>
                            <td>
                                $63,542
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                Mason Porter
                            </td>
                            <td>
                                Chile
                            </td>
                            <td>
                                Gloucester
                            </td>
                            <td>
                                $78,615
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection