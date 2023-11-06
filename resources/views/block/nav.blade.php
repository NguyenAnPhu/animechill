<form action="/search" method="get">
    <div class="nav mr-auto ml-auto text-slate-300 flex flex-wrap" style="background-color :rgb(23,24,28); max-width: 92%; ">
        
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Thể Loại</label>
            <select class="block text-black w-5/6" name="key" id="">
                <option value="">---</option>
                <option value="Tiên Hiệp">Tiên Hiệp</option>
                <option value="Phiêu Lưu">Phiêu Lưu</option>
                <option value="Học Đường">Học Đường</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Tình Trạng</label>
            <select class="block text-black w-5/6" name="key" id="">
                <option value="">---</option>
                <option value="SẮP RA">SẮP RA</option>
                <option value="HOT">HOT</option>
                

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Đánh Giá</label>
            <select class="block text-black w-5/6" name="key" id="">
                <option value="">---</option>
                <option value="10">10</option>
                <option value="9">9</option>
                <option value="8">8</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Nhà Phát Hành</label>
            <select class="block text-black w-5/6" name="key" id="">
                <option value="">---</option>
                <option value="CN Animation">CN Animation</option>
                <option value="Toei Animation">Toei Animation</option>
                <option value="JP Animation">JP Animation</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <button type="submit" class="mt-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">Filter</button>
        </div>
        

    </div>
</form>