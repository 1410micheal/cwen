

@extends('layouts.app')
@section('content')

<div class="row">
		<div class="col-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title mb-0">{{$user->name}}'s Profile</h3>
				</div>
				<div class="card-body pt-4">
					<div class="grid-margin">
						<div class="">
							<div class="panel panel-primary">
								<div class="tab-menu-heading border-0 p-0">
									<div class="tabs-menu1">
										<!-- Tabs -->
										<ul class="nav panel-tabs Order-sale">
											<li><a href="#profile" class="active"
													data-bs-toggle="tab">Profile</a></li>
											@if(current_user()->id == $user->id)
											<li><a href="#password" data-bs-toggle="tab"
													class="text-dark">Change Password</a></li>
											@endif
										</ul>
									</div>
								</div>
								<div class="panel-body tabs-menu-body border-0 pt-0">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
										   @include('profile.partials.user_profile')
										</div>

										@if(current_user()->id == $user->id)
										<div class="tab-pane" id="password">
										   @include('profile.partials.change_password')
										</div>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>


@endsection