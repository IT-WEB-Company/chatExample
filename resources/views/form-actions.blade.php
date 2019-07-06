@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Form actions layout section start -->
                <section id="form-action-layouts">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Form Actions</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-left">Project Info</h4>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Form Actions On Top Left.</strong>
                                    </div>
                                    <p class="mb-0">To add form actions on top of the form add a div with <code>.form-actions</code> class to
                                        begin the form. Add <code>.top</code> class to add border below form actions.</p>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">
                                        <form class="form">
                                            <div class="form-actions top">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput1">First Name</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput2">Last Name</label>
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput3">E-mail</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput4">Contact Number</label>
                                                        <input type="number" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="projectinput5">Company</label>
                                                        <input type="text" id="projectinput5" class="form-control" placeholder="Company Name" name="company">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput6">Interested in</label>
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput7">Budget</label>
                                                        <select id="projectinput7" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Select File</label>
                                                        <input type="file" class="form-control-file" id="projectinput8">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="projectinput9">About Project</label>
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-bottom-right">User Profile</h4>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Form Actions On Bottom Right.</strong>
                                    </div>

                                    <p class="mb-0">To add form actions on bottom of the form add a div with <code>.form-actions</code> class to
                                        end the form. This is the default position for form actions. We have added <code>.right</code> class to
                                        move buttons on the right side.</p>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">

                                        <form class="form">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-info"></i> About User</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput1">First Name</label>
                                                        <input type="text" id="userinput1" class="form-control border-primary" placeholder="Name" name="name">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput2">Last Name</label>
                                                        <input type="text" id="userinput2" class="form-control border-primary" placeholder="Company" name="company">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput3">Username</label>
                                                        <input type="text" id="userinput3" class="form-control border-primary" placeholder="Username" name="username">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput4">Nick Name</label>
                                                        <input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name" name="nickname">
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="userinput5">Email</label>
                                                        <input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="userinput6">Website</label>
                                                        <input class="form-control border-primary" type="url" placeholder="http://" id="userinput6">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Contact Number</label>
                                                        <input class="form-control border-primary" type="number" placeholder="Contact Number" id="userinput7">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="userinput8">Bio</label>
                                                        <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions right">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-bottom-left">Issue Tracking</h4>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Form Actions On Top And Bottom Left.</strong>
                                    </div>

                                    <p class="mb-0">To add form actions on top and bottom of the form add a div with <code>.form-actions</code>
                                        class to start and end the form.</p>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">

                                        <form class="form">
                                            <div class="form-body">

                                                <div class="form-actions top">
                                                    <button type="button" class="btn btn-raised btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-raised btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput1">Issue Title</label>
                                                        <input type="text" id="issueinput1" class="form-control" placeholder="issue title" name="issuetitle"
                                                               data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput2">Opened By</label>
                                                        <input type="text" id="issueinput2" class="form-control" placeholder="opened by" name="openedby"
                                                               data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opened By">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="issueinput3">Date Opened</label>
                                                        <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip"
                                                               data-trigger="hover" data-placement="top" data-title="Date Opened">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="issueinput4">Date Fixed</label>
                                                        <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip"
                                                               data-trigger="hover" data-placement="top" data-title="Date Fixed">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput5">Priority</label>
                                                        <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Priority">
                                                            <option value="low">Low</option>
                                                            <option value="medium">Medium</option>
                                                            <option value="high">High</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput6">Status</label>
                                                        <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Status">
                                                            <option value="not started">Not Started</option>
                                                            <option value="started">Started</option>
                                                            <option value="fixed">Fixed</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput8">Comments</label>
                                                        <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="comments"
                                                                  data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Comments"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-bottom-right">Timesheet</h4>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Form Actions On Top And Bottom Right.</strong>
                                    </div>

                                    <p class="mb-0">To add form actions on top and bottom of the form add a div with <code>.form-actions</code>
                                        class to start and end the form. Add <code>.right</code> class to align the form action buttons to right.</p>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">

                                        <form class="form">
                                            <div class="form-body">
                                                <div class="form-actions top right">
                                                    <button type="button" class="btn btn-raised btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-raised btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput1">Employee Name</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                                            <div class="form-control-position">
                                                                <i class="ft-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput2">Project Name</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput3">Date</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                            <div class="form-control-position">
                                                                <i class="ft-message-square"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Rate Per Hour</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)"
                                                                   name="rateperhour">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="timesheetinput5">Start Time</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="timesheetinput6">End Time</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput7">Notes</label>
                                                        <div class="position-relative has-icon-left">
                                                            <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                                            <div class="form-control-position">
                                                                <i class="ft-file"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions right">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-multiple">Event Registration</h4>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Multiple Form Actions On Top And Bottom.</strong>
                                    </div>

                                    <p>To add form actions on top and bottom of the form add a div with <code>.form-actions</code> class to start
                                        and end the form. Add <code>.buttons-group</code> class along with <code>.float-*</code> class to pull the
                                        buttons group to either left or right.</p>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">

                                        <form class="form">
                                            <div class="form-actions top clearfix">
                                                <div class="buttons-group float-left">
                                                    <button type="button" class="btn btn-raised btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-raised btn-primary mr-1">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="buttons-group float-right">
                                                    <button type="button" class="btn btn-raised btn-info mr-1">Action 1</button>
                                                    <button type="button" class="btn btn-raised btn-danger mr-1">Action 2</button>
                                                    <button type="button" class="btn btn-raised btn-success">Action 3</button>
                                                </div>
                                            </div>

                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput1">Full Name</label>
                                                                <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput2">Title</label>
                                                                <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput3">Company</label>
                                                                <input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput4">Email</label>
                                                                <input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput5">Contact Number</label>
                                                                <input type="number" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label>Existing Customer</label>
                                                                <div class="input-group">
                                                                    <div class="custom-control custom-radio d-inline-block ml-1">
                                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio d-inline-block ml-2">
                                                                        <input type="radio" id="customRadioInline2" checked name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadioInline2">No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions clearfix">
                                                <div class="buttons-group float-left">
                                                    <button type="button" class="btn btn-raised btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-raised btn-primary mr-1">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="buttons-group float-right">
                                                    <button type="button" class="btn btn-raised btn-info mr-1">Action 1</button>
                                                    <button type="button" class="btn btn-raised btn-danger mr-1">Action 2</button>
                                                    <button type="button" class="btn btn-raised btn-success">Action 3</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-bottom-center">Event Registration</h4>
                                    <div class="alert alert-info" role="alert">
                                        <strong>Form Actions On Top And Bottom Center.</strong>
                                    </div>

                                    <p>To add form actions on top and bottom of the form add a div with <code>.form-actions</code> class to start
                                        and end the form. Add <code>.center</code> class to align the form action buttons to center.</p>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">
                                        <form class="form">
                                            <div class="form-actions top center">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput1">Full Name</label>
                                                        <input type="text" id="eventInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput2">Title</label>
                                                        <input type="text" id="eventInput2" class="form-control" placeholder="title" name="title">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput3">Company</label>
                                                        <input type="text" id="eventInput3" class="form-control" placeholder="company" name="company">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput4">Email</label>
                                                        <input type="email" id="eventInput4" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput5">Contact Number</label>
                                                        <input type="number" id="eventInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Existing Customer</label>
                                                        <div class="input-group">
                                                            <div class="custom-control custom-radio d-inline-block ml-1">
                                                                <input type="radio" id="customRadioInline3" name="customRadioInline2" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline3">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-radio d-inline-block ml-2">
                                                                <input type="radio" id="customRadioInline4" checked name="customRadioInline2" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioInline4">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions center">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Form actions layout section end -->

            </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- START Notification Sidebar-->
<aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
        <div class="row">
            <div class="col-12 mt-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
                    <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
                    <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                        <div id="activity" class="col-12 timeline-left">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                            <div id="timeline" class="timeline-left timeline-wrapper">
                                <ul class="timeline">
                                    <li class="timeline-line"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                        <div id="chatapp" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                            <div class="collection border-none">
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Hello Boo</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Keny !</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Ohh God</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Love you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates</h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can we</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Great!</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Do it</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Got that</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Like you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell</h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves</h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Okay you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman</h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can do</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch</h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Leave it</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                        <div id="settings" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                                                    <label for="notifications1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                                                    <label for="recent-activity1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications2" type="checkbox" class="custom-control-input">
                                                    <label for="notifications2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity2" type="checkbox" class="custom-control-input">
                                                    <label for="recent-activity2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-emails" type="checkbox" class="custom-control-input">
                                                    <label for="show-emails" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-stats" type="checkbox" class="custom-control-input">
                                                    <label for="show-stats" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- END Notification Sidebar-->
@endsection
