<template>
  <el-col class="content">
    <el-row>
      <el-col :span="24">
        <el-form ref="form" :inline="true">
          <el-form-item label="显示">
            <el-select @change="get_attribute_list" v-model="eventValue" filterable placeholder="请选择">
              <el-option
                      v-for="item in events"
                      :key="item.value"
                      :label="item.label"
                      :value="item.value">
              </el-option>
            </el-select>
          </el-form-item>
          <el-form-item label="的">
            <el-select v-model="attributeValue" filterable placeholder="请选择">
              <el-option
                      v-for="item in attributes"
                      :key="item.value"
                      :label="item.label"
                      :value="item.value">
              </el-option>
            </el-select>
          </el-form-item>
        </el-form>
      </el-col>
      <el-col :span="24">
        <span class="demonstration">范围</span>
        <el-date-picker
                v-model="dateValue"
                type="daterange"
                align="right"
                placeholder="选择日期范围"
                :picker-options="pickerOptions2">
        </el-date-picker>
      </el-col>
    </el-row>
    <hr>
    <el-row>
      <el-col :span="24">
        <ve-line :data="chartData" :settings="chartSettings"></ve-line>
      </el-col>
    </el-row>
    <el-row>
      <el-col>
        <el-table
                :data="tableData"
                border
                style="width: 100%">
          <el-table-column
                  prop="date"
                  label="日期"
                  width="180">
          </el-table-column>
          <el-table-column
                  prop="name"
                  label="姓名"
                  width="180">
          </el-table-column>
          <el-table-column
                  prop="address"
                  label="地址">
          </el-table-column>
        </el-table>
      </el-col>
    </el-row>
  </el-col>
</template>

<script>
  export default {
    data(){
      return {
        events: [],
        eventValue: '',
        attributes: [],
        attributeValue: '',
        tableData: [
          {
            date: '2016-05-02',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1518 弄'
          }, {
            date: '2016-05-04',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1517 弄'
          }, {
            date: '2016-05-01',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1519 弄'
          }, {
            date: '2016-05-03',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1516 弄'
          } ],
        pickerOptions2: {
          shortcuts: [
            {
              text: '最近一周',
              onClick(picker) {
                const end = new Date();
                const start = new Date();
                start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
                picker.$emit('pick', [ start, end ]);
              }
            }, {
              text: '最近一个月',
              onClick(picker) {
                const end = new Date();
                const start = new Date();
                start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
                picker.$emit('pick', [ start, end ]);
              }
            }
          ]
        },
        dateValue: '',
        chartData: {}
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
        area: false,
        stack: {
          '销售额': [ '销售额-1季度', '销售额-2季度' ]
        }
      };
      this.get_event_list();
    },
    methods: {
      get_event_list(){
        let e = this;
        $.get('/frontend/event-analysis/event-list', {}, function (data) {
          data = JSON.parse(data);
          if (data) {
            e.events = data.map((val) => ({
              label: val.label,
              value: val.id
            }))
          }
        });
      },
      get_attribute_list(){
        let e = this;
        $.get('/frontend/event-analysis/attribute-list', {}, function (data) {
          data = JSON.parse(data);
          if (data) {
            e.attributes = data.map((val) => ({
              label: val.label,
              value: val.id
            }))
          }
        });
      },
    },
  }
</script>

<style lang="scss" scpoed>
  .content {
    padding: 15px 15px 15px 245px;
    position: absolute;
    top: 60px;
    right: 0;
    bottom: 0;
    left: 0;
    overflow-y: auto;
  }
</style>