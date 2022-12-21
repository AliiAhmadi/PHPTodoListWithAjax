<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Let us save your Tasks !</title>
  <link rel="icon" type="image/x-icon" href="assets/Web/icons8-todo-list-sf-black-96.png" />
</head>

<body>
  <section class="vh-100" style="background-color: #eee">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
              <h4 class="text-center my-3 pb-3">To Do App</h4>

              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                <div class="col-12">
                  <div class="form-outline">
                    <input type="text" id="form1" class="form-control" />
                    <label class="form-label" for="form1">Enter a task here</label>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-warning">
                    Get tasks
                  </button>
                </div>
              </form>

              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Todo item</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Buy groceries for next week</td>
                    <td>In progress</td>
                    <td>
                      <button type="submit" class="btn btn-danger">
                        Delete
                      </button>
                      <button type="submit" class="btn btn-success ms-1">
                        Finished
                      </button>
                    </td>
                  </tr>
                  <!-- <tr>
                      <th scope="row">2</th>
                      <td>Renew car insurance</td>
                      <td>In progress</td>
                      <td>
                        <button type="submit" class="btn btn-danger">
                          Delete
                        </button>
                        <button type="submit" class="btn btn-success ms-1">
                          Finished
                        </button>
                      </td>
                    </tr> -->
                  <!-- <tr>
                      <th scope="row">3</th>
                      <td>Sign up for online course</td>
                      <td>In progress</td>
                      <td>
                        <button type="submit" class="btn btn-danger">
                          Delete
                        </button>
                        <button type="submit" class="btn btn-success ms-1">
                          Finished
                        </button>
                      </td>
                    </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>