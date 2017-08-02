<template>
  <div class="content-wrapper">
    <div class="content">
      <form class="form-inline">
        <div class="form-group">
          <label for="main_select">显示</label>
          <select id="main_select" class="select2 form-control">
            <option selected="selected">事件1</option>
            <option>事件2</option>
            <option>事件3</option>
            <option>事件4</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sub_select">的</label>
          <select id="sub_select" class="select2 form-control">
            <option selected="selected">条件1</option>
            <option>条件2</option>
            <option>条件3</option>
            <option>条件4</option>
            <option>条件5</option>
          </select>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
	export default {
		mounted(){
			$('select').select2({
				language: "zh-CN",
				width: '120px'
			});
		}
	}
</script>