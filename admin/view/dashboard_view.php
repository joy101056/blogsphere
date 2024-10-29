<h1 class="mt-4">Blog Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Users</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">Total Categories</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Total Posts</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Total Comments</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<!-- Engagement Charts Row -->
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-line mr-1"></i>
                Monthly Post Trends
            </div>
            <div class="card-body"><canvas id="postTrendsChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-pie mr-1"></i>
                Comments Breakdown
            </div>
            <div class="card-body"><canvas id="commentsChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>

<!-- Recent Posts Table -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-blog mr-1"></i>
        Recent Blog Posts
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Comments</th>
                        <th>Date Published</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>How to Start a Blog</td>
                        <td>Md. Awal</td>
                        <td>Blogging Tips</td>
                        <td>45</td>
                        <td>2023/10/05</td>
                    </tr>
               
                </tbody>
            </table>
        </div>
    </div>
</div>
