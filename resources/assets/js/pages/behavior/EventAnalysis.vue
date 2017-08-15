<template>
  <div class="content">
    <el-row>
      <el-col :span="24">
        <el-select v-model="value8" filterable placeholder="请选择">
          <el-option
                  v-for="item in options"
                  :key="item.value"
                  :label="item.label"
                  :value="item.value">
          </el-option>
        </el-select>
        <el-select v-model="value8" filterable placeholder="请选择">
          <el-option
                  v-for="item in options"
                  :key="item.value"
                  :label="item.label"
                  :value="item.value">
          </el-option>
        </el-select>
      </el-col>
    </el-row>
    <el-row>
      <el-col>
        <ve-line :data="chartData" :settings="chartSettings"></ve-line>
      </el-col>
    </el-row>
  </div>
</template>

<script>
  export default {
    data(){
      return {
        options: [
          {
            value: '选项1',
            label: '黄金糕'
          }, {
            value: '选项2',
            label: '双皮奶'
          }, {
            value: '选项3',
            label: '蚵仔煎'
          }, {
            value: '选项4',
            label: '龙须面'
          }, {
            value: '选项5',
            label: '北京烤鸭'
          } ],
        value8: '',
      }
    },
    created: function () {
      this.chartData = {
        columns: [ '日期', '销售额-1季度', '销售额-2季度', '占比', '其他' ],
        rows: [
          { '日期': '1月1日', '销售额-1季度': 1523, '销售额-2季度': 1523, '占比': 0.12, '其他': 100 },
          { '日期': '1月2日', '销售额-1季度': 1223, '销售额-2季度': 1523, '占比': 0.345, '其他': 100 },
          { '日期': '1月3日', '销售额-1季度': 2123, '销售额-2季度': 1523, '占比': 0.7, '其他': 100 },
          { '日期': '1月4日', '销售额-1季度': 4123, '销售额-2季度': 1523, '占比': 0.31, '其他': 100 },
          { '日期': '1月5日', '销售额-1季度': 3123, '销售额-2季度': 1523, '占比': 0.12, '其他': 100 },
          { '日期': '1月6日', '销售额-1季度': 7123, '销售额-2季度': 1523, '占比': 0.65, '其他': 100 }
        ]
      };
      this.chartSettings = {
        dimension: [ '日期' ],
        metrics: [ '销售额-1季度', '销售额-2季度', '占比' ],
        axisSite: {
          right: [ '占比' ]
        },
        yAxisType: [ 'KMB', 'percent' ],
        yAxisName: [ '销售额', '占比' ],
        area: true,
        stack: {
          '销售额': [ '销售额-1季度', '销售额-2季度' ]
        }
      };
    }
  }
</script>

<style lang="scss" scpoed>
  .content {
    margin-left: 230px;
    padding: 15px;
  }
</style>