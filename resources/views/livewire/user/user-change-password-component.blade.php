<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Changer de mot de pass
                    </div>
                    <div class="panel-body">
                        @if (Session::has('password_succes'))
                            <div class="alert alert-success" role="alert">{{ Session::get('password_succes') }}</div>
                        @endif
                        @if (Session::has('password_error'))
                            <div class="alert alert-danger" role="alert">{{ Session::get('password_error') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mot de pass actuel</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Mot de pass actuel" class="form-control input-md" name="current_password" wire:model="current_password">
                                    @error('current_password') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nouvel mot de pass</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Nouvel mot de pass" class="form-control input-md" name="password" wire:model="password">
                                    @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirmer le mot de pass</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Confirmer le mot de pass" class="form-control input-md" name="password_confirmation" wire:model="password_confirmation">
                                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
