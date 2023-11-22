              <!-- ===== Start form news ===== -->
              <div class="formNews">
                <div class="title">
                  <h2 class="titleBlog">{{__('lang.newsletter')}}</h2>
                </div>
                <form class="newsletter" action="{{url('/')}}/newsletter/submit">
                  <input
                    type="email"
                    placeholder="{{__('lang.email')}}"
                    class="input"
                    name="email"
                    required
                  />
                  <p class="newsletter-success">{{__('lang.newsletter_success')}}</p>
                  <button class="btn btnSubmitBlog" type="submit">
                    {{__('lang.subscribe')}}
                  </button>
                </form>
              </div>
              <!-- ===== End form news ===== -->