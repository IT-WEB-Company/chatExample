@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Add rows table -->
                <section id="add-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add rows</h4>
                                    <p class="card-text">New rows can be added to a DataTable very easily using the ( row.add() ) API method.
                                        Simply call the API function with the data that is to be used for the new row (be it an array or object).
                                        Multiple rows can be added using the ( rows.add() ) method (note the plural). Data can be likewise be
                                        updated with the ( row().data() and row().remove() methods. )
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <button id="addRow" class="btn btn-primary mb-2"><i class="ft-plus"></i>&nbsp; Add new row</button>
                                        <table class="table table-striped table-bordered add-rows">
                                            <thead>
                                            <tr>
                                                <th>Column 1</th>
                                                <th>Column 2</th>
                                                <th>Column 3</th>
                                                <th>Column 4</th>
                                                <th>Column 5</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Column 1</th>
                                                <th>Column 2</th>
                                                <th>Column 3</th>
                                                <th>Column 4</th>
                                                <th>Column 5</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Add rows table -->
                <!-- Individual column searching (text inputs) table -->
                <section id="text-inputs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Individual column searching (text inputs)</h4>
                                    <p class="card-text">The searching functionality that is provided by DataTables is very useful for quickly
                                        search through the information in the table - however the search is global, and you may wish to present
                                        controls to search on specific columns only. DataTables has the ability to apply searching to a specific
                                        column through the column().search() method (note that the name of the method is search not filter since
                                        filter() is used to apply a filter to a result set).
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <table class="table table-striped table-bordered text-inputs-searching">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Individual column searching (text inputs) table -->
                <!-- Individual column searching (select inputs) table -->
                <section id="select-inputs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Individual column searching (select inputs)</h4>
                                    <p class="card-text">This example is almost identical to text based individual column example and provides
                                        the same functionality, but in this case using select input controls. After the table is initialised, the
                                        API is used to build the select inputs through the use of the column().data() method to get the data for
                                        each column in turn. The helper methods unique() and sort() are also used to reduce the data for set
                                        input to unique and ordered elements. Finally the change event from the select input is used to trigger a
                                        column search using the column().search() method.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered datatable-select-inputs">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Individual column searching (select inputs) table -->
                <!-- Child rows (show extra / detailed information) table -->
                <section id="child-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Child rows (show extra / detailed information)</h4>
                                    <p class="card-text">The DataTables API has a number of methods available for attaching child rows to a
                                        parent row in the DataTable. This can be used to show additional information about a row, useful for
                                        cases where you wish to convey more information about a row than there is space for in the host table.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <table class="table table-striped table-bordered show-child-rows">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Salary</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Child rows (show extra / detailed information) table -->
                <!-- Row selection (multiple rows) table -->
                <section id="row-selection">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Row selection (multiple rows)</h4>
                                    <p class="card-text">It can be quite useful at times to provide the user with the option to select rows in
                                        a DataTable. This can be done by simply using a click event to add / remove a class on the table rows.
                                        The rows().data() method can then be used to get the data for the selected rows. In this case it is
                                        simply counting the number of selected rows, but much more complex interactions can easily be developed.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <button id="row-count" class="btn btn-primary mb-2"><i class="ft-filter"></i>&nbsp; Row count</button>
                                        <br />
                                        <br />
                                        <table class="table table-striped table-bordered selection-multiple-rows">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Row selection (multiple rows) table -->
                <!-- Row selection and deletion (single row) -->
                <section id="selection-n-deletion">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Row selection and deletion (single row)</h4>
                                    <p class="card-text">This example shows a modification of the multiple row selection example, where just a
                                        single can now be selected. This is done simply by checking to see if the row already has a selected
                                        class or not, and if so removing it, if not then the class is removed from any other row in the table
                                        which does have it and applied to the row to be selected.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <button id="delete-row" class="btn btn-primary mr-1"><i class="ft-trash"></i>&nbsp; Delete selected row</button>
                                        <br />
                                        <br />
                                        <table class="table table-striped table-bordered selection-deletion-row">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Row selection and deletion (single row) -->
                <!-- Form inputs table -->
                <section id="form-inputs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form inputs</h4>
                                    <p class="card-text">In order to perform paging, ordering, searching etc, DataTables can remove rows and
                                        cells from the document (i.e. those rows / cells which are not needed are not inserted into the
                                        document). This increases performance and compatibility, however, it means that submitting forms which
                                        span multiple pages requires a little bit of additional work to get the information that is not in the
                                        document any longer.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <button class="btn btn-primary mr-1 inputs-submin"><i class="ft-file"></i>&nbsp; Submit form</button>
                                        <br />
                                        <br />
                                        <table class="table table-striped table-bordered submit-form-inputs">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>
                                                    <input type="text" id="row-1-age" name="row-1-age" value="61">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-1-position" name="row-1-position" value="System Architect">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-1-office" name="row-1-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>
                                                    <input type="text" id="row-2-age" name="row-2-age" value="63">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-2-position" name="row-2-position" value="Accountant">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-2-office" name="row-2-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo" selected="selected">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>
                                                    <input type="text" id="row-3-age" name="row-3-age" value="66">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-3-office" name="row-3-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>
                                                    <input type="text" id="row-4-age" name="row-4-age" value="22">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-4-office" name="row-4-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>
                                                    <input type="text" id="row-5-age" name="row-5-age" value="33">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-5-position" name="row-5-position" value="Accountant">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-5-office" name="row-5-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo" selected="selected">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>
                                                    <input type="text" id="row-6-age" name="row-6-age" value="61">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-6-position" name="row-6-position" value="Integration Specialist">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-6-office" name="row-6-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>
                                                    <input type="text" id="row-7-age" name="row-7-age" value="59">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-7-position" name="row-7-position" value="Sales Assistant">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-7-office" name="row-7-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>
                                                    <input type="text" id="row-8-age" name="row-8-age" value="55">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-8-position" name="row-8-position" value="Integration Specialist">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-8-office" name="row-8-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo" selected="selected">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>
                                                    <input type="text" id="row-9-age" name="row-9-age" value="39">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-9-position" name="row-9-position" value="Javascript Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-9-office" name="row-9-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>
                                                    <input type="text" id="row-10-age" name="row-10-age" value="23">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-10-position" name="row-10-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-10-office" name="row-10-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>
                                                    <input type="text" id="row-11-age" name="row-11-age" value="30">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-11-position" name="row-11-position" value="Office Manager">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-11-office" name="row-11-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>
                                                    <input type="text" id="row-12-age" name="row-12-age" value="22">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-12-position" name="row-12-position" value="Support Lead">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-12-office" name="row-12-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>
                                                    <input type="text" id="row-13-age" name="row-13-age" value="36">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-13-position" name="row-13-position" value="Regional Director">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-13-office" name="row-13-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>
                                                    <input type="text" id="row-14-age" name="row-14-age" value="43">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-14-office" name="row-14-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>
                                                    <input type="text" id="row-15-age" name="row-15-age" value="19">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-15-position" name="row-15-position" value="Regional Director">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-15-office" name="row-15-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>
                                                    <input type="text" id="row-16-age" name="row-16-age" value="66">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-16-position" name="row-16-position" value="Marketing Designer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-16-office" name="row-16-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>
                                                    <input type="text" id="row-17-age" name="row-17-age" value="64">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-17-office" name="row-17-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>
                                                    <input type="text" id="row-18-age" name="row-18-age" value="59">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-18-position" name="row-18-position" value="Systems Administrator">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-18-office" name="row-18-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>
                                                    <input type="text" id="row-19-age" name="row-19-age" value="41">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-19-position" name="row-19-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-19-office" name="row-19-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>
                                                    <input type="text" id="row-20-age" name="row-20-age" value="35">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-20-position" name="row-20-position" value="Personnel Lead">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-20-office" name="row-20-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>
                                                    <input type="text" id="row-21-age" name="row-21-age" value="30">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-21-position" name="row-21-position" value="Development Lead">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-21-office" name="row-21-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>
                                                    <input type="text" id="row-22-age" name="row-22-age" value="40">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-22-office" name="row-22-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>
                                                    <input type="text" id="row-23-age" name="row-23-age" value="21">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-23-office" name="row-23-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>
                                                    <input type="text" id="row-24-age" name="row-24-age" value="23">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-24-position" name="row-24-position" value="Sales Assistant">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-24-office" name="row-24-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>
                                                    <input type="text" id="row-25-age" name="row-25-age" value="47">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-25-office" name="row-25-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>
                                                    <input type="text" id="row-26-age" name="row-26-age" value="42">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-26-position" name="row-26-position" value="Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-26-office" name="row-26-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>
                                                    <input type="text" id="row-27-age" name="row-27-age" value="28">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-27-position" name="row-27-position" value="Regional Director">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-27-office" name="row-27-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>
                                                    <input type="text" id="row-28-age" name="row-28-age" value="28">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-28-position" name="row-28-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-28-office" name="row-28-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>
                                                    <input type="text" id="row-29-age" name="row-29-age" value="48">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-29-office" name="row-29-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>
                                                    <input type="text" id="row-30-age" name="row-30-age" value="20">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-30-position" name="row-30-position" value="Regional Marketing">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-30-office" name="row-30-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo" selected="selected">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>
                                                    <input type="text" id="row-31-age" name="row-31-age" value="37">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-31-position" name="row-31-position" value="Integration Specialist">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-31-office" name="row-31-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>
                                                    <input type="text" id="row-32-age" name="row-32-age" value="53">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-32-position" name="row-32-position" value="Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-32-office" name="row-32-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>
                                                    <input type="text" id="row-33-age" name="row-33-age" value="27">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-33-position" name="row-33-position" value="Technical Author">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-33-office" name="row-33-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>
                                                    <input type="text" id="row-34-age" name="row-34-age" value="22">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-34-position" name="row-34-position" value="Team Leader">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-34-office" name="row-34-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>
                                                    <input type="text" id="row-35-age" name="row-35-age" value="46">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-35-position" name="row-35-position" value="Post-Sales support">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-35-office" name="row-35-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>
                                                    <input type="text" id="row-36-age" name="row-36-age" value="47">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-36-position" name="row-36-position" value="Marketing Designer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-36-office" name="row-36-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>
                                                    <input type="text" id="row-37-age" name="row-37-age" value="51">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-37-position" name="row-37-position" value="Office Manager">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-37-office" name="row-37-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>
                                                    <input type="text" id="row-38-age" name="row-38-age" value="41">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-38-position" name="row-38-position" value="Secretary">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-38-office" name="row-38-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>
                                                    <input type="text" id="row-39-age" name="row-39-age" value="62">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-39-position" name="row-39-position" value="Financial Controller">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-39-office" name="row-39-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>
                                                    <input type="text" id="row-40-age" name="row-40-age" value="37">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-40-position" name="row-40-position" value="Office Manager">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-40-office" name="row-40-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>
                                                    <input type="text" id="row-41-age" name="row-41-age" value="65">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-41-position" name="row-41-position" value="Director">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-41-office" name="row-41-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>
                                                    <input type="text" id="row-42-age" name="row-42-age" value="64">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-42-position" name="row-42-position" value="Support Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-42-office" name="row-42-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>
                                                    <input type="text" id="row-43-age" name="row-43-age" value="38">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-43-position" name="row-43-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-43-office" name="row-43-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>
                                                    <input type="text" id="row-44-age" name="row-44-age" value="37">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-44-position" name="row-44-position" value="Support Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-44-office" name="row-44-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo" selected="selected">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>
                                                    <input type="text" id="row-45-age" name="row-45-age" value="61">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-45-position" name="row-45-position" value="Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-45-office" name="row-45-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>
                                                    <input type="text" id="row-46-age" name="row-46-age" value="47">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-46-position" name="row-46-position" value="Support Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-46-office" name="row-46-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>
                                                    <input type="text" id="row-47-age" name="row-47-age" value="64">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-47-position" name="row-47-position" value="Data Coordinator">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-47-office" name="row-47-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>
                                                    <input type="text" id="row-48-age" name="row-48-age" value="63">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-48-position" name="row-48-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-48-office" name="row-48-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>
                                                    <input type="text" id="row-49-age" name="row-49-age" value="56">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-49-position" name="row-49-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-49-office" name="row-49-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>
                                                    <input type="text" id="row-50-age" name="row-50-age" value="43">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-50-office" name="row-50-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>
                                                    <input type="text" id="row-51-age" name="row-51-age" value="46">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-51-position" name="row-51-position" value="Sales Assistant">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-51-office" name="row-51-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>
                                                    <input type="text" id="row-52-age" name="row-52-age" value="47">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-52-position" name="row-52-position" value="Regional Director">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-52-office" name="row-52-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>
                                                    <input type="text" id="row-53-age" name="row-53-age" value="21">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-53-position" name="row-53-position" value="Systems Administrator">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-53-office" name="row-53-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>
                                                    <input type="text" id="row-54-age" name="row-54-age" value="30">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-54-position" name="row-54-position" value="Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-54-office" name="row-54-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>
                                                    <input type="text" id="row-55-age" name="row-55-age" value="51">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-55-position" name="row-55-position" value="Regional Director">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-55-office" name="row-55-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>
                                                    <input type="text" id="row-56-age" name="row-56-age" value="29">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-56-position" name="row-56-position" value="Javascript Developer">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-56-office" name="row-56-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>
                                                    <input type="text" id="row-57-age" name="row-57-age" value="27">
                                                </td>
                                                <td>
                                                    <input type="text" id="row-57-position" name="row-57-position" value="Customer Support">
                                                </td>
                                                <td>
                                                    <select size="1" id="row-57-office" name="row-57-office">
                                                        <option value="Edinburgh">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">
                                                            London
                                                        </option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Form inputs table -->
                <!-- Show & hide columns dynamically table -->
                <section id="show-hide-columns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Show / hide columns dynamically</h4>
                                    <p class="card-text">This example shows how you can make use of the column().visible() API method to
                                        dynamically show and hide columns in a table. Also included here is scrolling, just to show it enabled
                                        with this API method, although that is not required for the API function to work.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <div>
                                            Toggle column: <a class="toggle-vis" data-column="0">Name</a> - <a class="toggle-vis" data-column="1">Position</a>
                                            - <a class="toggle-vis" data-column="2">Office</a> - <a class="toggle-vis" data-column="3">Age</a> - <a
                                                class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a>
                                        </div>
                                        <table class="table table-striped table-bordered hide-columns-dynamically">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Show & hide columns dynamically table -->
                <!-- Search API (regular expressions) table -->
                <section id="search-api">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Search API (regular expressions)</h4>
                                    <p class="card-text">Searching a table is one of the most common user interactions with a DataTables table,
                                        and DataTables provides a number of methods for you to control this interaction. There are APIs for the
                                        global search (search()) and for each individual column (column().search()).
                                        <br /> Note also that you must call the draw() method after performing the search, in order for the
                                        results to be displayed.
                                    </p>
                                </div>
                                <div class="card-content ">
                                    <div class="card-body table-responsive">
                                        <table style="margin: 0 auto 2em auto;" class="table table-striped table-bordered search-api">
                                            <thead>
                                            <tr>
                                                <th>Target</th>
                                                <th>Search text</th>
                                                <th>Treat as regex</th>
                                                <th>Use smart search</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr id="filter_global">
                                                <td>Global search</td>
                                                <td class="text-center">
                                                    <input type="text" class="global_filter_search" id="global_filter_search">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="global_filter_search" id="global_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="global_filter_search" id="global_smart" checked="checked">
                                                </td>
                                            </tr>
                                            <tr id="filter_col1" data-column="0">
                                                <td>Column - Name</td>
                                                <td class="text-center">
                                                    <input type="text" class="column_filter_search" id="col0_filter">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col0_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col0_smart" checked="checked">
                                                </td>
                                            </tr>
                                            <tr id="filter_col2" data-column="1">
                                                <td>Column - Position</td>
                                                <td class="text-center">
                                                    <input type="text" class="column_filter_search" id="col1_filter">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col1_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col1_smart" checked="checked">
                                                </td>
                                            </tr>
                                            <tr id="filter_col3" data-column="2">
                                                <td>Column - Office</td>
                                                <td class="text-center">
                                                    <input type="text" class="column_filter_search" id="col2_filter">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col2_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col2_smart" checked="checked">
                                                </td>
                                            </tr>
                                            <tr id="filter_col4" data-column="3">
                                                <td>Column - Age</td>
                                                <td class="text-center">
                                                    <input type="text" class="column_filter_search" id="col3_filter">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col3_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col3_smart" checked="checked">
                                                </td>
                                            </tr>
                                            <tr id="filter_col5" data-column="4">
                                                <td>Column - Start date</td>
                                                <td class="text-center">
                                                    <input type="text" class="column_filter_search" id="col4_filter">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col4_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col4_smart" checked="checked">
                                                </td>
                                            </tr>
                                            <tr id="filter_col6" data-column="5">
                                                <td>Column - Salary</td>
                                                <td class="text-center">
                                                    <input type="text" class="column_filter_search" id="col5_filter">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col5_regex">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="column_filter_search" id="col5_smart" checked="checked">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="display table table-striped table-bordered search-api">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Search API (regular expressions) table -->

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
