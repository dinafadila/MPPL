@extends('layouts.app', ['activePage' => 'calendar', 'titlePage' => __('Kalender Akademik')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-success">
        <h3 class="card-title">Kalender Akademik</h3>
        <p class="card-category">Semester Ganjil</p>
      </div>
      <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
               
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
