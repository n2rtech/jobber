 {{-- Banh Tab Start --}}

 <div class="tab-pane" id="customer-banh" role="tabpanel" aria-labelledby="customer-banh-tab">
     @if (count($customer->banh) > 0)
         <div class="table-responsive">
             <table id="dataTable" class="table table-sm table-bordered">
                 <thead>
                     <tr>
                         <th>{{ __('S No.') }}</th>
                         <th>{{ __('Date Added') }}</th>
                         <th>{{ __('Job Type') }}</th>
                         <th width="45%">{{ __('Products / Services') }}</th>
                         <th>{{ __('Survey') }}</th>
                         <th width="5%"></th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($customer->banh as $banh)
                         <tr>
                             <td><a href="{{ route('banh.show', $banh->id) }}">#{{ $banh->id }}</a></td>
                             <td>{{ \Carbon\Carbon::parse($banh->created_at)->format('d-m-Y') }}</td>
                             @php
                                $job = \App\Models\Job::where('id', $banh->job_id)->first();
                             @endphp
                             <td>{{ $job->jobTitle->title }}</td>
                             <td>
                                <ul>
                                    @foreach($job->products as $product)
                                        <li>{{ $product->product->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @isset($banh->survey)
                                <a href="{{ route('banh.edit', $banh->survey->id)}}" class="btn btn-sm btn-warning">Edit Survey</a>
                                <a href="{{ route('download.survey', $banh->survey->id) }}" class="btn btn-sm btn-primary">Generate Pdf</a>
                                @else
                                <a href="{{ route('banh.index', ['customer_id' => $customer->id, 'banh_id' => $banh->id])}}" class="btn btn-sm btn-success">Create Survey</a>
                                @endisset
                            </td>
                             <td>
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-light dropdown-toggle dropdown-hover"
                                         data-toggle="dropdown" aria-expanded="false">
                                         <i class="fa fa-ellipsis-vertical"></i>
                                     </button>
                                     <div class="dropdown-menu" role="menu" style="">
                                         <a class="dropdown-item" href="{{ route('banh.show', $banh->id) }}"><i
                                                 class="fas fa-download"></i> Generate</a>
                                         <a class="dropdown-item" href="javascript:void(0)"
                                             onclick="confirmBanhDelete({{ $banh->id }})"><i
                                                 class="fas fa-trash-alt"></i> Delete</a>
                                         <form id='delete-Banhform{{ $banh->id }}'
                                             action='{{ route('banh.destroy', $banh->id) }}' method='POST'>
                                             <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                             <input type='hidden' name='_method' value='DELETE'>
                                         </form>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     @else
         <p class="text-center mt-4">{{ __('No Banh Added') }}</p>
     @endif
 </div>

 {{-- Banh Tab End --}}
