<!-- get updates / modal trigger -->
<section id="updates" class="bg-light py-5">
      <div class="container">
        <div class="text-center">
          <h2>Stay in the Loop</h2>
          <p class="lead">
            Want to get the latest news and updates on the site?
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-muted">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime
            facere magnam itaque dicta sapiente modi iste nemo quaerat optio,
            nisi, autem aut doloremque fugiat nostrum quod! Impedit optio
            pariatur at.
          </p>
          <button
            class="btn btn-primary btn-primary text-white"
            data-bs-toggle="modal"
            data-bs-target="#reg-modal"
          >
            Register for Updates
          </button>
        </div>
      </div>
    </section>

    <!-- modal code -->
    <div
      id="reg-modal"
      class="modal fade"
      tabindex="-1"
      aria-labelledby="modal-title"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Stay in the Loop</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Necessitatibus a natus culpa quidem incidunt provident pariatur ea
              doloribus suscipit! Dolores officiis perspiciatis veniam unde
              soluta cum et harum voluptatum quo.
            </p>
            <label for="modal-email" class="form-label">Email</label>
            <input
              id="modal-email"
              type="email"
              class="form-control"
              placeholder="name@mail.com"
            />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>