<h2 class="my-5 text-center">Manage Category Page</h2>

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span><i class="fas fa-tags mr-1"></i> Manage Categories</span>
        <a class="btn btn-primary btn-sm" href="add_category.php">Add New Category</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="categoriesTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Posts Count</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Technology</td>
                        <td>Posts related to tech news, reviews, and tips</td>
                        <td>34</td>
                        <td>2023/03/14</td>
                        <td>
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Health & Wellness</td>
                        <td>Articles on health tips, wellness guides, and fitness</td>
                        <td>20</td>
                        <td>2023/06/09</td>
                        <td>
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
