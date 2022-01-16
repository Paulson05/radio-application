<section class="section team-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>introduce our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @php
            $teams = \App\Models\Team::all();
            @endphp
            <div class="col-lg-12">
                <div class="team-slider slider-arrow">
                    @foreach($teams as $team)
                    <div class="team-card">
                        <div class="team-img">
                            <img src="{{$team->image}}"   alt="team-1">
                            <div class="team-overlay">
                                <ul class="team-icon">
                                    <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-meta">
                            <h4>{{$team->name}}</h4>
                            <p>{{$team->jod_titile}}</p>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-btn">
                    <a class="btn btn-outline" href="team.html"><i class="fas fa-eye"></i><span>show more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
